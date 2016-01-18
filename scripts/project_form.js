function goBack() {
  window.history.back();
}

function validate(form) {
  var isValid = form.querySelectorAll('*:invalid').length === 0;

  return true;
  // // Temporary redirect to show the flow
  // if (isValid) {
  //   window.location = "my_projects_added.html";
  //   return false;
  // } else {
  //   return true;
  // }
}