// Not functional:
var name1 = "Yusuf";
var greeting1 = "Hi, I'm ";
console.log(greeting1 + name1);
//=> "Hi, I'm Yusuf"

// Functional:
function greet(name2) {
    return "Hi, I'm" + name2;
}
greet("Yusuf");
//=> "Hi, I'm Yusuf"

//Not pure:
var name3 = "Yusuf";
function greet3() {
    console.log("Hi, I'm" + name3);
}

// başka bir örnek
function makeAdjectifier(adjective) {
    return function (string) {
        return adjective + "" + string;
    };
}

var coolifier = makeAdjectifier("cool");
coolifier("conference");
// => "cool conference"


// Mutation (bad!)
var rooms = ["H1", "H2", "H3"];
rooms[2] = "H4";
rooms;
// => ["H1","H2","H4"]

// No mutation (good!):
// var rooms = ["H1", "H2", "H3"];
// var rm;
// var newRooms = rooms.map(function (rm)){
//     if (rm == "H3"){ return "H4"; }
//     else { return rm; }
//   });
newRooms; // => ["H1","H2","H4"]
rooms; // => ["H1","H2","H3"]
