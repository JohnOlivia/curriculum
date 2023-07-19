// https://zipcloud.ibsnet.co.jp/api/search?zipcode=

let search = document.querySelector("#search");
search.addEventListener(
  "click",
  () => {
    let api = "https://zipcloud.ibsnet.co.jp/api/search?zipcode=";
    let error = document.querySelector("#error");
    let input = document.querySelector("#input");
    let address1 = document.querySelector("#address1");
    let address2 = document.querySelector("#address2");
    let address3 = document.querySelector("#address3");
    let param = input.value.replace("-", "");
    let url = api + param;



    async function fetchDate () {
      try {
        const response = await fetchJsonp(url, {
          timeout: 5000 
        });
        error.textContent = '';
        const data = await response.json();

        if (data.status === 400) {
          error.textContent = date.message;
        } else if (data.results === null) {
          error.textContent = '郵便番号から住所が見つかりませんでした。';
        } else {
          address1.value = data.results[0].address1;
          address2.value = data.results[0].address2;
          address3.value = data.results[0].address3;
        }
      } catch (ex) {
        console.log(ex);
      }
    }
    fetchDate();
  },false);
