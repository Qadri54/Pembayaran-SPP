const message = document.getElementById("message");
const logout = document.getElementById("logout");
const yesbutton = document.getElementById("yesbutton");
const buttonNav = document.getElementById("button-navbar");
const contentNav = document.getElementById("content-navbar");
const keyword = document.getElementById("keyword");
const container = document.getElementById("container");
const modal = document.getElementById("popup-modal");
const modalContent = document.querySelector(".modal-content")

// top-[40%] left-[37%]

let tempurl = ""; //tampung linknya
let changer = false;

document.body.addEventListener("click", (e) => {
  if (e.target.classList.contains("logout")) {
    console.log(e);
  }

  if (e.target.classList.contains("hapus")) {
    e.preventDefault();
    tempurl = e.target.href; //masukkan link ke tempurl
    console.log(tempurl);

    if(changer == true){        
        modal.classList.remove("hidden");
        modalContent.classList.add("top-[40%]","left-[40%]");
    }

    message.innerHTML = "apakah anda yakin ingin menghapus item ini?";  
  }
});

logout.addEventListener("click", (e) => {
  e.preventDefault();
  tempurl = logout.href; //masukkan link ke tempurl
  message.innerHTML = "apakah anda yakin ingin logout?";
});

yesbutton.addEventListener("click", () => {
  window.location.href = tempurl; // ketika tombol "yes" ditekan, arahkan page ke link yang sudah ditampung
});

//live search
keyword.addEventListener("keyup", () => {
  const xhr = new XMLHttpRequest();
  changer = true;

  xhr.onreadystatechange = () => {
    if (xhr.readyState === 4 && xhr.status) {
      container.innerHTML = xhr.responseText;
    }
  };

  if (keyword.value != "") {
    xhr.open("GET", "livesearch.php?keyword=" + keyword.value, true);
  } else {
    xhr.open("GET", "defaultpage.php", true);
  }
  xhr.send();
});
