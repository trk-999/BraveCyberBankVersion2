var box  = document.getElementById('bravebox');
var downward = false; 

function toggleMessage() {
    if (downward) {
        bravebox.style.height  = '0px';
		bravebox.style.opacity = 0;
        downward = false ;
     } else {
        bravebox.style.height = '410';
        bravebox.style.opacity = 1;
        downward = true;
        
    }
}