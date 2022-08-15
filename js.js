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
let links = [["","",""],["","",""]]
//let linkss = [ ["https://dood.pm/e/y1ivf73ii3jlr4883jcbvrvpsklwpgc",
         "https://img.doodcdn.co/splash/fmf8uwri5402060l.jpg","01:01:24 mins",  0],
         [ "https://dood.pm/e/1az14e0kxmrihwy1gaxffh3odquz1rp9",
               "https://i.postimg.cc/zGnkZpsP/ch2-31.jpg","14:54 mins", 1 ]
,        ["https://dood.pm/e/cx2opbbiui45bb6axyjr79k8ayluhwmq",
         "https://img.doodcdn.co/splash/evl0wdkm7ejorf1b.jpg","4:26 mins", 2],
        ["https://dood.pm/e/4z8w46wmj831eon0isvamihur3hkao2e",
         "https://img.doodcdn.co/splash/wz76darmq1d44wcs.jpg"," 22:20 mins", 3],
        ["https://dood.pm/e/7j1a9otcyqj0ttt4vnkh8iatf36eeb1i",
         "https://img.doodcdn.com/splash/um28h85xnztovy7u.jpg"," 10:21 mins", 4],
        ["https://dood.pm/e/d0psuf36kmsu8kvhut6vk14pq2q7xb18",
         "https://img.doodcdn.com/splash/rgihzlaws6qfelll.jpg","11:11 mins", 5],
        ["https://dood.pm/e/ucurpb26f50gc0zhellhsqprauhzzh3u",
         "https://img.doodcdn.com/splash/xehf5c1faxm5xlpo.jpg"," 41:46 mins", 6],
        ["https://dood.pm/e/qm6qhb0airvi9ajotscn550r5cizw86n",
         "https://img.doodcdn.co/splash/w6c9x6rqf3p007nr.jpg","18:52 mins", 7],
        ["https://dood.pm/e/bpwgut5wq2oqi489440toga6hnr92fbb",
         "https://i.postimg.cc/fW0R5FnX/Screenshot-23574754a44dcbec5.png", "54:20 mins",8],
        ["https://dood.pm/e/bjjj3kwrvegisfb87a0xztswzk6hb7ot",
         "https://img.doodcdn.co/splash/j3fo1xtp0csrqxzp.jpg","2:25 mins", 9],  
         
      [
"https://dood.pm/e/n1qyu88cvpkdtnbo31oxg7iwwm91ezka",
"http://saurabh4521-001-site1.gtempurl.com/img09.jpg","",10
],
];
 links =shuffle (links );
//console.log(links );
