console.log('== lub != => porównuje wartości bez porównania typów')
let a = 10
let b = '10'
console.log(`${a} == ${b} => ${a == b}`)
console.log(`${a} != ${b} => ${a != b}`)
console.log('')
console.log('=== lub !== porównuje wartości i ich typ')
let x = 50
let z = '50'
console.log(`${x} === ${z} => ${x === z}`)
console.log(`${x} !== ${z} => ${x !== z}`)
console.log('')
console.log('< lub > => mniejsze lub większe')
let mniej = 10
let wiecej = 20
console.log(`${mniej} < ${wiecej} => ${mniej < wiecej}`)
console.log(`${wiecej} < ${mniej} => ${wiecej < mniej}`)
console.log(`${mniej} > ${wiecej} => ${mniej > wiecej}`)
console.log('')
console.log('<= i >= => mniejsze-równe i większe-równe')
console.log(`${mniej} <= ${wiecej} => ${mniej <=wiecej}`)
console.log(`${mniej} <= ${wiecej} => ${mniej >= wiecej}`)