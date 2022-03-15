var keys='';
document.onkeypress = function keylogger() {
  let get = window.event;
  let key = get.key;
  keys+=key;
  document.getElementById("keylogger").innerHTML = keys;
}