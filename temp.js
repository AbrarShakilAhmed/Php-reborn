// function outer() {
//   let n = 0
//   return function () {
//     return n++
//   }
// }
// let counter = outer()

// console.log(counter())
// console.log(counter())

// // more effency

// const createCounter = (n = 0) => {
//   let current = n
//   return () => current++
// }

// Array.prototype.last = function () {
//   if (this.length == 0) return -1
//   return this[this.length - 1]
// }

// const arr = [1, 2, 3]
// arr.last() // 3
/**
 * @param {string} s
 * @return {number}
 */
var romanToInt = function(s) {
  let res = 0;
 let values = {
     'I': 1,
     'V': 5,
     'X': 10,
     'L': 50,
     'C': 100,
     'D': 500,
     'M': 1000
  }
  let arrL = s.length
 for (let i = 0 ; i < arrL; i++) {
     if (i < s.length - 1 && values[s[i]] < values[s[i + 1]]) {
         res -= values[s[i]]
     } else {
         res += values[s[i]]
     }
 }
 return res;
};