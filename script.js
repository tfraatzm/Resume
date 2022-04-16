document.getElementById("jspract").innerHTML = "This is JS practice for innerHTML"

// alert("This is a JS alert!")

// function askName() {
//     var firstName = prompt("What is your name?");
    // alert(firstName + ", thank you for checking out my page!!")
// };

// (function getAge() {
//     var getAge = prompt("Please type iin your age?")

//     if (getAge > 18) {
//         alert("congrats, you are old!")
//     } else if (askAge < 18) {
//         alert("You still need to grow up!")
//     }
// })();

(function (){
    var date = new Date();
    console.log(date);
    var hours = date.getHours();
    console.log(hours);

    if (hours >=5 && hours <= 12) {
        alert("Good morning");
    } else if (hours > 12 && hours <= 18){
        alert("Good afternoon");
    } else if (hours > 18){
        alert("Good evening")
    }
})();

// switch (new Date().getHours()) {
//     case 0:
//         hours=
//         break;

//     default:
//         break;
// }

const myReference = [
        {
        name: "Tracy",
        company: "Owow",
        phone: 333333,
        reference: "Heyheyhey"
    },
    {
        name: "Lindsey",
        company: "Oop",
        phone: 444444,
        reference: "Heyhey"
    },
    {
        name: "Stacey",
        company: "Ow",
        phone: 666666,
        reference: "Hey"
    },
];

// for (i = 0; i < myReference.length; i++){
//     document.write(myReference[1].name + " said this: " + myReference.reference);
//     document.write.innerHTML("");
// }

for (i = 0; i < myReference.length; i++){
    document.write(myReference[i].name + " said this: " + myReference[i].reference);
    document.write("");
    }
        

function myFunction() {
    var newText = document.getElementById("").value;
    if (newText === "") {
        throw "Field cannot be empty.";
    }
}