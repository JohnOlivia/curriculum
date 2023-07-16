{
  try {
    throw new ReferenceError("hallo", "some.js", 7);
  } catch (e) {
    console.log(e.name);
  } finally {
    console.log("エラーで表示されませんでした。");
  }
}
// {
//   try {
//     throw new SyntaxError("hallo", "some.js", 7);
//   } catch (e) {
//     console.log(e.name);
//   } finally {
//     console.log("エラーで表示されませんでした。");
//   }
// }
// {
//   try {
//     throw new TypeError("hallo", "some.js", 7);
//   } catch (e) {
//     console.log(e.name);
//   } finally {
//     console.log("エラーで表示されませんでした。");
//   }
// }

// {
//   try {
//     ららら;

//     throw new ReferenceError("hallo", "some.js", 7);
//   } catch (e) {
//     console.log(e);
//   } finally {
//     console.log("エラーで表示されませんでした。");
//   }
// }
