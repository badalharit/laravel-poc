function App() {

  return /*#__PURE__*/(
    React.createElement("div", { className: "App" }, /*#__PURE__*/
      React.createElement(React.Fragment, null, /*#__PURE__*/
        React.createElement(TodoList, null)), /*#__PURE__*/
      React.createElement(Foobar, null)));
}

function TodoList() {
  const generateID = () => {
    let result = "";
    let input_length = 5;
    let chars =
      "[@678^#(ABC,F3qr.sIJKN_+}{:OPQRghi)jDEklm:~noGH=2pL*$Mtuvwx<STU1>5VW`XYZa4bcd&efyz09]";
    for (var i = 0; i < input_length; i++) {
      result += chars.charAt(Math.floor(Math.random() * chars.length));
    }
    return result;
  };
  const sortList = (a, b) => {
    return a.isCompleted > b.isCompleted ?
      1 :
      b.isCompleted > a.isCompleted ?
        -1 :
        0;
  };
  const [todoList, setTodoList] = React.useState(itemListJson.sort(sortList));

  const [newTask, setNewTask] = React.useState("");

  const inputRef = React.useRef(null);
  const btnRef = React.useRef(null);
    /**
     * Curl API service to add the item
     * -------------------------------
     */
    const addNewTask = (newTask) => {
      var apiToken = '';
      const appToken = {
        laravelApiToken: 'eyJpdiI6IjRBWWU4cEgwelZQSVZoem92SU9uUXc9PSIsInZhbHVlIjoiT1E3K1U1Ujl0Tng3Si9ucmtnRmJmWkl0OFVSeFNNeXRCUjZ6dmpuMHllST0iLCJtYWMiOiJhM2I5ZmVjYjU4N2RmOTI5MWZhODA2YmQyY2QyZTgwZGI1OGJiNTEyMGJhODAwZDA2MWRmNGZjODI0NDI4NjUxIiwidGFnIjoiIn0='
      };
      axios.post('api/get-api-token', appToken)
        .then(response => {
          apiToken = response.data.api_token; // assign response.data.api_token to apiToken
          // console.log(apiToken); // This will log the updated value of apiToken
          const data = {
            taskName: newTask,
            api_token: apiToken
          };
          axios.post('api/addnewtask', data)
            .then(response => {
              console.log(response.data);
            })
            .catch(error => {
              console.error(error);
            });
        })
        .catch(error => {
          console.error(error);
        });
    };
    
  const handleChange = e => {
    e.preventDefault();
    setNewTask(e.target.value);
  };

  React.useEffect(() => {
    const listener = event => {
      if (event.code === "Enter" || event.code === "NumpadEnter") {
        btnRef.current.click();
      }
    };
    inputRef.current.addEventListener("keydown", listener);
    return () => {
      inputRef.current.removeEventListener("keydown", listener);
    };
  }, []);

  const handleDelete = id => {
    // console.log(id); // To Perform Delete Ops 
    setTodoList(todoList.filter(list => list.id !== id));
    /**
     * Curl API service to Delete an item
     * -----------------------------------
     */
    const deleteTask = (id) => {
      var apiToken = '';
      const appToken = {
        laravelApiToken: 'eyJpdiI6IjRBWWU4cEgwelZQSVZoem92SU9uUXc9PSIsInZhbHVlIjoiT1E3K1U1Ujl0Tng3Si9ucmtnRmJmWkl0OFVSeFNNeXRCUjZ6dmpuMHllST0iLCJtYWMiOiJhM2I5ZmVjYjU4N2RmOTI5MWZhODA2YmQyY2QyZTgwZGI1OGJiNTEyMGJhODAwZDA2MWRmNGZjODI0NDI4NjUxIiwidGFnIjoiIn0='
      };
      axios.post('api/get-api-token', appToken)
        .then(response => {
          apiToken = response.data.api_token; // assign response.data.api_token to apiToken
          // console.log(apiToken); // This will log the updated value of apiToken
          const data = {
            taskId: id,
            api_token: apiToken
          };
          axios.post('api/deletetask', data)
            .then(response => {
              console.log(response.data);
            })
            .catch(error => {
              console.error(error);
            });
        })
        .catch(error => {
          console.error(error);
        });
    };
    deleteTask(id);
  };

  const handleEdit = content => {
    setNewTask(content.taskName);
    inputRef.current.value = content.taskName;
    inputRef.current.focus();

    setTodoList(todoList.filter(list => list.id !== content.id));
  };
  const handleDone = status => {
    status.isCompleted = true;
    setTodoList([...todoList.sort(sortList)]);
  };
  const addTask = () => {
    if (inputRef.current.value !== "") {
      const task = {
        id: todoList.length === 0 ? 1 : generateID(),
        taskName: newTask,
        isCompleted: false
      };
      // console.log(newTask);
      setTodoList([...todoList, task].sort(sortList));
      setNewTask("");
      inputRef.current.value = "";
      inputRef.current.focus();
      addNewTask(newTask);
    } else {
      alert(customeAlert());
    }
  };
  const customeAlert = () => {
    let alertMsgs = [
      "Please type in something",
      "input can't be empty",
      "Invalid input",
      "something went wrong"];

    let msgIndex = Math.floor(Math.random() * alertMsgs.length);
    let randomMsg = alertMsgs[msgIndex];

    return randomMsg;
  };

  return /*#__PURE__*/(
    React.createElement("div", { className: "todolist" }, /*#__PURE__*/
      React.createElement("div", { className: "title" }, /*#__PURE__*/
        React.createElement("h1", null, "TODO APP")), /*#__PURE__*/

      React.createElement("div", { className: "addTask" }, /*#__PURE__*/
        React.createElement("input", {
          ref: inputRef,
          type: "text",
          onChange: handleChange,
          placeholder: "Add a task........"
        }), /*#__PURE__*/

        React.createElement("button", { ref: btnRef, onClick: addTask, className: "addtask-btn" }, "Add Task")), /*#__PURE__*/
      React.createElement("div", { className: "lists" },
        todoList.length > 0 ? /*#__PURE__*/
          React.createElement(React.Fragment, null,
            todoList.map((list, id) => /*#__PURE__*/
              React.createElement("div", {
                key: id,
                className: `list ${list.isCompleted ? "completed" : ""}`
              }, /*#__PURE__*/

                React.createElement("p", null, " ", list.taskName), /*#__PURE__*/
                React.createElement("div", { className: "span-btns" }, /*#__PURE__*/
                  React.createElement("span", {
                    style: { opacity: list.isCompleted ? "0" : "1" },
                    onClick: () => handleDone(list),
                    title: "completed"
                  }, "\u2713"), /*#__PURE__*/



                  React.createElement("span", {
                    className: "delete-btn",
                    onClick: () => handleDelete(list.id),
                    title: "delete"
                  }, "X"), /*#__PURE__*/



                  React.createElement("span", {
                    className: "edit-btn",
                    onClick: () => handleEdit(list),
                    title: "edit"
                  }, "\u21BB"))))) : /*#__PURE__*/
          React.createElement("h1", null, "Nothing To see here"))));
}


const Foobar = () => {
  return /*#__PURE__*/(
    React.createElement("div", { id: "foobar" }, "Made with \uD83D\uDC99 Liquid | ", new Date().getFullYear()));

};
// Tells React to attach the HelloWorld component to the 'root' HTML div
ReactDOM.render( /*#__PURE__*/React.createElement(App, null), document.getElementById("root"));