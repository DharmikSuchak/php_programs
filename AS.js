function simple() {
  console.log("f1");
}

function simple2() {
  console.log("f2");
}

setTimeout(() => {
  simple();
}, 500);
simple2();