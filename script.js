// onkeyup event
document.querySelector("#newtask input").onkeyup = () => {
  let userEnteredValue = document.querySelector("#newtask input").value; //getting user entered value
  if (userEnteredValue.trim() != 0) {
    //if the user value isn't only spaces
    document.querySelector("#newtask button#push").classList.add("active"); //active the add button
  } else {
    document.querySelector("#newtask button#push").classList.remove("active"); //unactive the add button
  }
};

var listArray = [];

document.querySelector("#newtask button#push").onclick = () => {
  //when user click on plus icon button
  if (document.querySelector("#newtask input").value == 0) {
    //if there is no value in the input box
    document.querySelector("#newtask button#push").classList.remove("active"); //unactive the add button
  } else {
    listArray.push(document.querySelector("#newtask input").value); //pushing or adding new value in array
    showTasks(); //calling showTask function
  }
  document.querySelector("#newtask button#push").classList.remove("active"); //unactive the add button once the task added
};

function showTasks() {
  let newLiTag = "";
  listArray.forEach((element, index) => {
    newLiTag += `<li>${element}
    <input type="hidden" name="choices[]" value="${element}" />
    <span class="icone" onclick="deleteTask(${index})"><i class="fas fa-trash"></i></span>
    </li>`;
  });
  document.querySelector("#tasks").innerHTML = newLiTag; //adding new li tag inside ul tag
  document.querySelector("#newtask input").value = ""; //once task added leave the input field blank
}

// delete task function
function deleteTask(index) {
  listArray.splice(index, 1); //delete or remove the li
  showTasks(); //call the showTasks function
}
