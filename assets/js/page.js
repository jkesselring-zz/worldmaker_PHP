var limit = 3;

function createListItem(val) {
  var listItem = document.createElement("li");
  listItem.appendChild(document.createTextNode(val));
  return listItem;
}

function clearListItems(category) {
  var element = document.getElementById(category + '-list');
  element.innerHTML = "";
}

function fetch(category, limit) {
  var req = new XMLHttpRequest();
  req.open('get', 'handlers/'+category+'.php?num='+limit);
  req.send();
  req.onreadystatechange = function () {
    if (req.readyState === 4) {
      if (req.status === 200) {
        clearListItems(category);
        displayCategory(req.responseText, category);
      } else {
        return "Error";
      }
    }
  }
}

function displayCategory(categoryItemsToDisplay, category) {
  var listElem = document.getElementById(category+'-list');
  var categories = JSON.parse(categoryItemsToDisplay);
  for (var i = 0; i < categories.length;i++){
    listElem.appendChild(createListItem(categories[i]));
  }
}

function regenerate(lmt) {
  limit = lmt;
  fetch('title', limit);
  fetch('name', limit);
  fetch('plot', limit);
  fetch('weapon', limit);
  fetch('armor', limit);
  fetch('planet', limit);
}

document.getElementById('title-regenerate').onclick = function(){ fetch('title', limit); }
document.getElementById('plot-regenerate').onclick = function(){ fetch('plot', limit); }
document.getElementById('planet-regenerate').onclick = function(){ fetch('planet', limit); }
document.getElementById('name-regenerate').onclick = function(){ fetch('name', limit); }
document.getElementById('armor-regenerate').onclick = function(){ fetch('armor', limit); }
document.getElementById('weapon-regenerate').onclick = function(){ fetch('weapon', limit); }
