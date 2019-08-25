function changeTheme() {
  //document.getElementById('myTheme').style.backgroundImage = "url(img/hearts_2.png)";
  if (document.body.className === "theme1") {
    document.body.className = "theme2";
  } else if (document.body.className === "theme2") {
    document.body.className = "theme3";
  } else {
    document.body.className = "theme1";
  }

}
