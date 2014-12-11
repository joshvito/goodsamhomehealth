<!-- Begin

// NOTE: If you use a ' add a slash before it like this \'

document.write('<TABLE cellpadding="0" cellspacing="0" border="0" width="100%" height="150"><tr><td colspan="2">');

document.write('<TABLE cellpadding="0" cellspacing="0" border="0" width="100%"><tr><td width="900">');
document.write('<a href="index.html"><img src="picts/main.jpg" HEIGHT="125" WIDTH="900" border="0"></a><br>');
document.write('</td><td background="picts/main-background.jpg">');
document.write('&nbsp;<br>');
document.write('</td></tr></table>');

document.write('</td></tr><tr><td bgcolor="#DDA0DD" height="25" align="right" background="picts/background-menu-horz.gif">');
document.write('<TABLE cellpadding="0" cellspacing="2" border="0" class="headermenu"><tr><td>');


// START HORIZONTAL LINKS - COPY AND PASTE THE NEXT 3 LINES TO ADD A LINK
document.write('716-204-0710      </a><br>');
document.write('</td><td>');
document.write('&nbsp;&nbsp;|&nbsp;&nbsp;<br></td><td>');


document.write('<a href="contact.htm" class="menu">Contact</a><br>');
document.write('</td><td>');
document.write('&nbsp;&nbsp;|&nbsp;&nbsp;<br></td><td>');



document.write('<a href="index.html" class="menu">Home</a><br>');
document.write('</td><td width="35">&nbsp;<br>');
document.write('</td></tr></table>');
document.write('</td></tr></table>');



// START DATE SCRIPT - DELETE ALL THE FOLLOWING LINES TO REMOVE


document.write('<div id="date-location">');
var d=new Date()
var weekday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
var monthname=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
document.write("<span class=\"headermenu\"><nobr>" + weekday[d.getDay()] + " ")
document.write(d.getDate() + ". ")
document.write(monthname[d.getMonth()] + " ")
document.write(d.getFullYear())
document.write("</nobr><br></span>")
document.write('</div>');




//  End -->