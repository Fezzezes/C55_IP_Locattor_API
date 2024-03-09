window.addEventListener("load", () => {

    document.querySelector("#ip").onkeyup = function (e) {
        if (e.which == 13 && this.value.length > 7) {
            let ip = this.value;
            this.value = "";

            let animation = new Promise(animateLock);
            animation.then(() => lookupIp(ip));
        }
    }
});

const animateLock = (resolve, reject) => {
    let angle = 0;
    let lock = document.querySelector(".lock");

    const tick = () => {
        if (angle < 360) {
            angle += 2;
            lock.style.transform = "rotate(" + angle + "deg)";
            window.requestAnimationFrame(tick);
        }
        else {
            resolve();
        }
    }

    tick();
}

const lookupIp = ipAddress => {
    
        //création d'un nouveau formulaire
        let formData = new FormData();
        //append dans le formulaire
        formData.append("ipAdress", ipAddress);
        //get l'echo de ajax.php, en lui envoyant le formulaire en parametre
        fetch("ajax.php", {
            method: "post",
            body : formData
        })
        .then(response => response.json())
        .then(data => {
            //injecte le résultat dans le html
            console.log(data["city"]);
            document.querySelector(".result-container").innerText = data["city"];
        })
}