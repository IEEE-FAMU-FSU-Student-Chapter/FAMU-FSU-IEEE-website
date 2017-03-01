window.onload = function() {
  var infoPane = document.getElementById("info_tile_pane");
  var tile = document.createElement("DIV");
  var text = document.createTextNode("some text");
  var tiles = {};
  var text = {};
  var infoInd = 0;

  var paneWidth = infoPane.offsetWidth;
  infoPane.style.background = "rgba(0, 0, 0, 0)";


  function Tile(width, height, color, title) {
    this.color = color;
    this.height = height;
    this.width = width;
    this.tile;
    this.id;
    this.title = title;
  }

  Tile.prototype.createTile = function() {
    this.tile = document.createElement("DIV");
    heading = document.createElement("h1");
    heading.style.color = "rgba(0, 0, 0, 0.5)";
    heading.style.fontSize = "26px";
    heading.appendChild(document.createTextNode(this.title));
    heading.style.position = "absolute";
    this.tile.appendChild(heading);

    this.tile.style.position = "relative";
    this.tile.style.background = this.color;
    this.tile.style.width = (this.width-20) + "px";
    this.tile.style.height = this.height + "px";
    this.tile.style.margin = 5 + "px";

    //this.tile.style.display  = "inline-block";
    this.tile.style.float = "left";
    this.tile.style.padding = 2 + "px";
    //this.tile.style.margin = 0 + "px";
    this.tile.style.boxShadow = "5px 0px 8px black";

    //this.tile.style.backgroundImage = "url(" + this.image + ")";

    // To create multiple tiles
    tiles[infoInd] = this.tile;
    this.id = infoInd;
    infoInd++;
  }

  Tile.prototype.setColor = function(newColor) {
    this.color = newColor;
  }
  Tile.prototype.setTitle = function(newTitle) {
    this.title = newTitle;
  }


  Tile.prototype.setImage = function(newImage) {
    var elem = document.createElement("img");
    elem.setAttribute("src", newImage);
    elem.setAttribute("height", this.height);
    elem.setAttribute("width", this.width-20);
    elem.style.left = "0px";
    elem.style.right = "0px";
    elem.style.opacity = "0.5";
    elem.style.position = "absolute";
    //elem.setAttribute("alt", "Flower");
    //this.tile.style.backgroundImage = "url(" + image + ")";
    //this.tile.style.opacity = "0.2";
    this.tile.appendChild(elem);
  }

  var w = (paneWidth / 3);
  var h = 300;
  var color = "rgba(66, 244, 134, 0.4)";

  image = "Images/events/GBM/arduino1.png";
  // Create new tile variables to hold all of the tiles
  var t = new Tile(w, h, color, "TITLE");

  t.setTitle("GBM #5");
  t.createTile();

  t.setTitle("TITLE");
  t.setColor("black");
  t.setImage(image);
  t.createTile();

  t.setColor("green");
  t.createTile();

  t.setColor("yellow");
  t.createTile();

  t.setColor("white");
  t.createTile();

  t.setColor("black");
  t.createTile();

  t.setColor("green");
  t.createTile();

  t.setColor("yellow");
  t.createTile();

  t.setColor("white");
  t.createTile();

  // Add tiles to info pane
  for(var i=0; i<infoInd; i++) {
    infoPane.appendChild(tiles[i]);
  }


  //var t = tile.createTile();

/*
  var id = 1;
  tiles[0] = document.createElement("DIV");
  text[0] = document.createTextNode("box 1");
  tiles[0].appendChild(text[0]);
  tiles[0].style.position = "relative";
  tiles[0].style.background = "red";
  tiles[0].style.width = (paneWidth / 3) + "px";
  tiles[0].style.height = "300px";
  tiles[0].style.display  = "inline-block";
  */

/*

  tiles[1] = document.createElement("DIV");
  text[1] = document.createTextNode("box 2");
  tiles[1].appendChild(text[1]);
  tiles[1].style.position = "relative";
  tiles[1].style.background = "green";
  tiles[1].style.width = (paneWidth / 3) + "px";
  tiles[1].style.height = "300px";
  tiles[1].style.display  = "inline-block";
  //tiles[1].style.left = (1 * (paneWidth / 3)) + "px";


  tiles[2] = document.createElement("DIV");
  text[2] = document.createTextNode("box 3");
  tiles[2].appendChild(text[2]);
  tiles[2].style.position = "relative";
  tiles[2].style.background = "yellow";
  tiles[2].style.width = (paneWidth / 3) + "px";
  tiles[2].style.height = "300px";
  tiles[2].style.display  = "inline-block";
  //tiles[2].style.left = (2 * (paneWidth / 3)) + "px";
  */

/*
  infoPane.appendChild(tiles[0]);
  infoPane.appendChild(tiles[1]);
  infoPane.appendChild(tiles[2]);
  */

}
