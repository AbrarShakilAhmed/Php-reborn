function x() {
  setTimeout(() => {
    return 1
  }, 3000)
}

x = x()
console.log(x)

if (x == 1) {
  console.log(1)
} else if (x == 2) {
  console.log(2)
}

