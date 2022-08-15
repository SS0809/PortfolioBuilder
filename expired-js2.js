    function ab(x){
      window.location.href =links[x][0];
    }
    function myFunction(x)
{
   // window.location.href = links[x][0];
   document.getElementById(x).src = links[x][1];
 
 //  document.write(links[0][2]);
} 
function caller()
{

for (let i = 1; i < 10; i++) {
    myFunction (i);
  }  
}
function mydark() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}

function shuffle(array) {
  let currentIndex = array.length,  randomIndex;

  // While there remain elements to shuffle.
  while (currentIndex != 0) {

    // Pick a remaining element.
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex--;

    // And swap it with the current element.
    [array[currentIndex], array[randomIndex]] = [
      array[randomIndex], array[currentIndex]];
  }
  return array;
}
let links = [ 
["https://dood.pm/e/kxbvlgzuysjlnvmv2op767gl54b8imao",
"https://img.doodcdn.co/splash/jma7tl7f5jk3pht5.jpg","",11

],
["https://dood.pm/e/q6vgm3b1m89nv41d4mozw6k0f69lwhj9",
"https://img.doodcdn.com/splash/3adk0516odr1yrgc.jpg","",12
],
["https://dood.pm/e/zrda0hrrnvqnn2l5xhqwrjeguvwvkak5",
"https://img.doodcdn.com/splash/5luhfsd6ltgh7y5c.jpg","",13

],
[
"https://dood.pm/e/xfz96f17pjdok7t7i40pgg5jtx5nb0ut",
"https://img.doodcdn.com/snaps/72edvnzzs709jlc7.jpg","",14
],

  
 [
"https://dood.pm/e/n1qyu88cvpkdtnbo31oxg7iwwm91ezka",
"http://saurabh4521-001-site1.gtempurl.com/img09.jpg", "", 15

],
 [
"http://saurabh4521-001-site1.gtempurl.com/vid08.mp4",
"http://saurabh4521-001-site1.gtempurl.com/img08.jpg", "", 16

],
[
	"https://dood.pm/e/zprmz23owoq9rmj83fewumh4p95oeijo",
"http://saurabh4521-001-site1.gtempurl.com/Monicabelluccifuckedhard.jpg","",17
],
];
 links =shuffle (links );
//console.log(links );
