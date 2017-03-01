

window.onload = function() {
  // Initialize canvas DOM object on screen load
  var canvas = document.getElementById("featuredCanv");
  //var c = canvas.getContext("2d");
  var s = 30;
  var w = canvas.offsetWidth, h = canvas.offsetHeight;
  var backgroundClr = "rgba(1, 3, 17, 0.91)";

  //c.fillStyle = backgroundClr;
  //c.fillRect(0, 0, w, h);

  // initialize 3D renderer parameters
  var camera, controls, scene, renderer;
  //init();
  //animate();

  function init() {
    // create camera view
    camera = new THREE.PerspectiveCamera(100, w / h, 1, 10000);
    //camera.position.z = 10;
    camera.position.set(0,0,-1);

    // create view controls
    controls = new THREE.TrackballControls(camera); // control of camera
    controls.addEventListener('change', render);

    // create scene
    scene = new THREE.Scene();

    // create object
    var cube = new THREE.CubeGeometry(100, 100, 100); // create new cube object
    var material = new THREE.MeshNormalMaterial(); // create normal material for cube object
    var mesh = new THREE.Mesh(cube, material);

    scene.add(mesh); // add cube to scene

    // initialize rendering
    renderer = new THREE.WebGLRenderer();
    renderer.domElement.id = 'renderer';
    renderer.setSize(w, h);
    canvas.appendChild(renderer.domElement);
    // alert("TESTING TESTING 123");
    //alert("GOOD");
  }

  function animate() {
    requestAnimationFrame(animate); // continuously refresh screen for animnation
    controls.update(); // continouoly update scrren with mouse controls
  }

  function render() {
    renderer.render(scene, camera);
  }
}
