var right = new Audio('files/Audio/Right.mp3');
var wrong = new Audio('files/Audio/Wrong.mp3');
var audio1 = new Audio('files/Audio/Buzzer1.mp3');
var audio2 = new Audio('files/Audio/Buzzer2.mp3');
var audio3 = new Audio('files/Audio/Buzzer3.mp3');
var audio4 = new Audio('files/Audio/Buzzer4.mp3');
var audio5 = new Audio('files/Audio/Buzzer5.mp3');
var audio = [audio1, audio2, audio3, audio4, audio5];
var standby = true;
var defaultColor = "darkslategray";
var title = document.getElementById( "title");

var okColor = ['aliceblue', 'antiquewhite', 'aqua', 'aquamarine', 'azure', 'beige', 'bisque', 'black', 'blanchedalmond', 'blue', 'blueviolet', 'brown', 'burlywood', 'cadetblue', 'chartreuse', 'chocolate', 'coral', 'cornflowerblue', 'cornsilk', 'crimson', 'cyan', 'darkblue', 'darkcyan', 'darkgoldenrod', 'darkgray', 'darkgreen', 'darkgrey', 'darkkhaki', 'darkmagenta', 'darkolivergreen', 'darkorange', 'darkorchid', 'darkred', 'darksalmon', 'darkseagreen', 'darkslateblue', 'darkslategray', 'darkslategrey', 'darkturquoise', 'darkviolet', 'deeppink', 'deepskyblue', 'dimgray', 'dimgrey', 'dodgerblue', 'firebrick', 'floralwhite', 'forestgreen', 'fuchsia', 'gainsboro', 'ghostwhite', 'gold', 'goldenrod', 'gray', 'grey', 'green', 'greenyellow', 'honeydew', 'hotpink', 'indianred', 'indigo', 'ivory', 'khaki', 'lavender', 'lavenderblush', 'lawngreen', 'lemonchiffon', 'lightblue', 'lightcoral', 'lightcyan', 'lightgoldenrodyellow', 'lightgray', 'lightgreen', 'lightgrey', 'lightpink', 'lightsalmon', 'lightseagreen', 'lightskyblue', 'lightslategray', 'lightslategrey', 'lightsteelblue', 'lightyellow', 'lime', 'limegreen', 'linen', 'magenta', 'maroon', 'mediumaquamarine', 'mediumblue', 'mediumorchid', 'mediumpurple', 'mediumseagreen', 'mediumslateblue', 'mediumspringgreen', 'mediumturquoise', 'mediumvioletred', 'midnightblue', 'mintcream', 'mistyrose', 'moccasin', 'navajowhite', 'navy', 'oldlace', 'olive', 'olivedrab', 'orange', 'orangered', 'orchid', 'palegoldenrod', 'palegreen', 'paleturquoise', 'palevioletred', 'papayawhip', 'peachpuff', 'peru', 'pink', 'plum', 'powderblue', 'purple', 'red', 'rosybrown', 'royalblue', 'saddlebrown', 'salmon', 'sandybrown', 'seagreen', 'seashell', 'sienna', 'silver', 'skyblue', 'slateblue', 'slategray', 'slategrey', 'snow', 'springgreen', 'steelblue', 'tan', 'teal', 'thistle', 'tomato', 'turquoise', 'violet', 'wheat', 'white', 'whitesmoke', 'yellow', 'yellowgreen'];

onStart();

function onStart() {
  document.getElementById( "section" ).style.minHeight = screen.height + "px";
  document.getElementById( "settings" ).style.minHeight = screen.height + "px";
  if (checkDefault()==false) {
    localStorage.gameTitleDefault = "Game Title";
    localStorage.timeDefault = "5";
    localStorage.p1ColorDefault = "red";
    localStorage.p2ColorDefault = "darkcyan";
    localStorage.p3ColorDefault = "orange";
    localStorage.p4ColorDefault = "green";
    localStorage.p5ColorDefault = "blueviolet";
    localStorage.p1Default = "Team 1";
    localStorage.p2Default = "Team 2";
    localStorage.p3Default = "Team 3";
    localStorage.p4Default = "Team 4";
    localStorage.p5Default = "Team 5";
  }
  if (checkSaved()==false && confirm("Some undefined parameters found. Use default?")==true)
    setDefault();
  else useSavedSettings();
  textBox.focus();
  reseter();
}

function reseter() {
  clearTimeout(localStorage.to);
  standby = true;
  localStorage.answering = "false";
  textBox.focus();
  demo.innerHTML = "";
  counter.innerHTML = "";
  main.style.paddingBottom = "0px";
  header.style.backgroundColor = defaultColor;
  textBox.style.borderColor = defaultColor;
  document.getElementById( "loadingImg" ).style.display = "inline";
  document.getElementById( "reseter" ).style.visibility = "hidden";
  document.getElementById( "openSettings" ).style.left = "-2.5%";
  title.style.fontSize = "120px";
}

function checkSaved() {
  savedParameters = [localStorage.time,
localStorage.p1Color, localStorage.p2Color, localStorage.p3Color, localStorage.p4Color, localStorage.p5Color, localStorage.p1, localStorage.p2, localStorage.p3, localStorage.p4, localStorage.p5];
  for (a=0; a<savedParameters.length; a++)
    if (savedParameters[a] == "" || savedParameters[a] == undefined)
      return false;
  return true;
}

function checkInput() {
  inputParameters = [iTimer.value,
cP1.value, cP2.value, cP3.value, cP4.value, cP5.value, nP1.value, nP2.value, nP3.value, nP4.value, nP5.value, title.value];
  for (a=0; a<inputParameters.length; a++)
    if (inputParameters[a] == "" || inputParameters[a] == undefined) 
      return false;
  return true;
}

function checkDefault() {
  defaultParameters = [localStorage.gameTitleDefault, localStorage.timeDefault,
localStorage.p1ColorDefault, localStorage.p2ColorDefault, localStorage.p3ColorDefault, localStorage.p4ColorDefault, localStorage.p5ColorDefault, localStorage.p1Default, localStorage.p2Default, localStorage.p3Default, localStorage.p4Default, localStorage.p5Default];
  for (a=0; a<defaultParameters.length; a++)
    if (defaultParameters[a] == undefined)
      return false;
  return true;
}

function setDefault() {
  localStorage.gameTitle = localStorage.gameTitleDefault;
  localStorage.time = localStorage.timeDefault;
  localStorage.p1Color = localStorage.p1ColorDefault;
  localStorage.p2Color = localStorage.p2ColorDefault;
  localStorage.p3Color = localStorage.p3ColorDefault;
  localStorage.p4Color = localStorage.p4ColorDefault;
  localStorage.p5Color = localStorage.p5ColorDefault;
  localStorage.p1 = localStorage.p1Default;
  localStorage.p2 = localStorage.p2Default;
  localStorage.p3 = localStorage.p3Default;
  localStorage.p4 = localStorage.p4Default;
  localStorage.p5 = localStorage.p5Default;
  useSavedSettings();
}

function makeDefault() {
  if (checkInput()==false) {
    if (confirm("Some undefined parameters found.\nUse default instead?")==true) {
      setDefault(); closeSettings();
    }
  }
  else if (iTimer.value/1 == undefined || iTimer.value%1 != 0 || iTimer.value < 2)
    alert("Invalid time.");
  else {
    var cOk = ["false", "false", "false", "false", "false"];
    var cSmall = [cP1.value.toLowerCase(), cP2.value.toLowerCase(), cP3.value.toLowerCase(), cP4.value.toLowerCase(), cP5.value.toLowerCase()];
    for ( a=0; a<=4; a++ )
      for ( b=0; b<okColor.length; b++ )
        if (cSmall[a] == okColor[b])
          cOk[a] = "true";
    for (a=0; a<=4; a++) {
      if (cOk[a]=="false") {
        alert("Use only web browser-supported color names.");
        break;
      }
      else if (a==4) {
        storeValues();
        makeDefault2();
        closeSettings();
      }
    }
  }
}

function makeDefault2() {
  localStorage.gameTitleDefault =  localStorage.gameTitle;
  localStorage.timeDefault = localStorage.time;
  localStorage.p1ColorDefault = localStorage.p1Color;
  localStorage.p2ColorDefault = localStorage.p2Color;
  localStorage.p3ColorDefault = localStorage.p3Color;
  localStorage.p4ColorDefault = localStorage.p4Color;
  localStorage.p5ColorDefault = localStorage.p5Color;
  localStorage.p1Default = localStorage.p1;
  localStorage.p2Default = localStorage.p2;
  localStorage.p3Default = localStorage.p3;
  localStorage.p4Default = localStorage.p4;
  localStorage.p5Default = localStorage.p5;
}

function useSavedSettings() {
  title.value = localStorage.gameTitle;
  iTimer.value = localStorage.time;
  cP1.value = localStorage.p1Color;
  cP2.value = localStorage.p2Color;
  cP3.value = localStorage.p3Color;
  cP4.value = localStorage.p4Color;
  cP5.value = localStorage.p5Color;
  nP1.value = localStorage.p1;
  nP2.value = localStorage.p2;
  nP3.value = localStorage.p3;
  nP4.value = localStorage.p4;
  nP5.value = localStorage.p5;
}

function saveSettings() {
  if (checkInput()==false) {
    if (confirm("Some undefined parameters found.\nUse default instead?")==true) {
      setDefault(); closeSettings();
    }
  }
  else if (iTimer.value/1 == undefined || iTimer.value%1 != 0 || iTimer.value < 2)
    alert("Invalid time.");
  else {
    var cOk = ["false", "false", "false", "false", "false"];
    var cSmall = [cP1.value.toLowerCase(), cP2.value.toLowerCase(), cP3.value.toLowerCase(), cP4.value.toLowerCase(), cP5.value.toLowerCase()];
    for ( a=0; a<=4; a++ )
      for ( b=0; b<okColor.length; b++ )
        if (cSmall[a] == okColor[b])
          cOk[a] = "true";
    for (a=0; a<=4; a++) {
      if (cOk[a]=="false") {
        alert("Use only web browser-supported color names.");
        break;
      }
      else if (a==4) {
        storeValues(); closeSettings();
      }
    }
  }
}

function storeValues() {
  localStorage.p1Color = cP1.value;
  localStorage.p2Color = cP2.value;
  localStorage.p3Color = cP3.value;
  localStorage.p4Color = cP4.value;
  localStorage.p5Color = cP5.value;
  localStorage.p1 = nP1.value;
  localStorage.p2 = nP2.value;
  localStorage.p3 = nP3.value;
  localStorage.p4 = nP4.value;
  localStorage.p5 = nP5.value;
  localStorage.time = iTimer.value;
  localStorage.gameTitle = title.value;
}

function openSettings() {
  reseter();
  settings.style.display = "inline";
  section.style.display = "none";
  document.getElementById( "hideHelp" ).style.display = "none";
  document.getElementById( "help" ).style.display = "none";
  document.getElementById( "showHelp" ).style.display = "inline";
  document.getElementById( "closeSettings" ).style.visibility = "visible";
  document.getElementById( "saveSettings" ).style.visibility = "visible";
  document.getElementById( "closeSettings" ).style.left = "15%";
  document.getElementById( "saveSettings" ).style.left = "15%";
  title.style.fontSize = "80px";
  title.style.cursor = "auto";
  title.focus();
}

function closeSettings() {
  settings.style.display = "none";
  section.style.display = "inline";
  useSavedSettings();
  reseter();
  title.style.fontSize = "80px";
  title.style.cursor = "default";
}

function showHelp() {
  document.getElementById( "help" ).style.display = "inline";
  document.getElementById( "showHelp" ).style.display = "none";
  document.getElementById( "hideHelp" ).style.display = "inline";
}

function hideHelp() {
  document.getElementById( "help" ).style.display = "none";
  document.getElementById( "showHelp" ).style.display = "inline";
  document.getElementById( "hideHelp" ).style.display = "none";
}

function myFunction(event) {
  textBox.value = "";
  var name = [localStorage.p1, localStorage.p2, localStorage.p3, localStorage.p4, localStorage.p5];
  for (a=0; a<=4; a++) {
    if (event.which==54 || event.keyCode==54) { reseter(); break; }
    else if (standby==false && (event.which==55 || event.keyCode==55)) {
      clearTimeout(localStorage.to);
      localStorage.answering = "false";
      counter.innerHTML = "<br/>Wrong";
      wrong.volume = 1.0;
      wrong.play();
      header.style.backgroundColor = defaultColor;
      textBox.style.borderColor = defaultColor;
      demo.style.color = defaultColor;
      break;
    }
    else if (standby==false && (event.which==56 || event.keyCode==56)) {
      clearTimeout(localStorage.to);
      localStorage.answering = "false";
      counter.innerHTML = "<br/>Right";
      right.play(); 
      header.style.backgroundColor = localStorage.pColor;
      textBox.style.borderColor = localStorage.pColor;
      demo.style.color = localStorage.pColor;
      break;
    }
    else if (localStorage.answering == "false" && (event.which==a+49 || event.keyCode==a+49)) {
      wrong.volume = 0.0;
      wrong.currentTime = 2;
      wrong.play();
      var n = "";
      clearTimeout(localStorage.to);
      localStorage.answering = "true";
      standby = false;
      audio[a].play();
      title.style.fontSize = "40px";
      document.getElementById( "loadingImg" ).style.display = "none";
      document.getElementById( "reseter" ).style.visibility = "visible";
      document.getElementById( "reseter" ).style.left = "15%";
      document.getElementById( "openSettings" ).style.left = "15%";
      main.style.paddingBottom = "40px";
      textBox.value="";
      demo.innerHTML = name[a];
      switch (event.keyCode) {
        case 49 : localStorage.pColor = localStorage.p1Color; n = localStorage.p1; break;
        case 50 : localStorage.pColor = localStorage.p2Color; n = localStorage.p2; break;
        case 51 : localStorage.pColor = localStorage.p3Color; n = localStorage.p3; break;
        case 52 : localStorage.pColor = localStorage.p4Color; n = localStorage.p4; break;
        case 53 : localStorage.pColor = localStorage.p5Color; n = localStorage.p5; break;
      }
      if (n.length > 20) demo.style.fontSize = "120px";
      else if (n.length > 15) demo.style.fontSize = "150px";
      else if (n.length > 10) demo.style.fontSize = "200px";
      else demo.style.fontSize = "250px";
      textBox.style.borderColor = localStorage.pColor;
      header.style.backgroundColor = localStorage.pColor;
      demo.style.color = localStorage.pColor;
      countdown(localStorage.time, 0);
    }
  }
}

function countdown(s, ms) {
  localStorage.to = setTimeout(function countdownInner() {
    counter.innerHTML = "<br/>" + s + "." + ms + " s";
    if (s > 0 && ms == 0) { s--; ms = 9; countdown(s, ms); }
    else if (s > 0 && ms > 0) { ms--; countdown(s, ms); }
    else {
      counter.innerHTML = "<br/>-- : --";
      localStorage.answering = "false";
      header.style.backgroundColor = defaultColor;
      textBox.style.borderColor = defaultColor;
      demo.style.color = defaultColor;
      wrong.volume = 1.0;
      wrong.play();
    }
  }, 100);
}
