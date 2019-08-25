function changeTheme() {
  //document.getElementById('myTheme').style.backgroundImage = "url(img/hearts_2.png)";
  if (document.getElementById('myTheme').className === "theme1") {
    document.getElementById('myTheme').className = "theme2";
  } else {
    document.getElementById('myTheme').className = "theme1";
  }
  
}
