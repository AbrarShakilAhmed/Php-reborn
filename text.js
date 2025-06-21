let arr = []
function Outer(DemoArr) {
  return (user) => {
    DemoArr.push(user)
  }
}
let AddUser = Outer(arr)

AddUser('abrar')
AddUser('hasan')

console.log(arr)
