<!--
/* common javascript functions        */
/* jlopes,   Sat Jul  1 22:45:50 2006 */

// dates in my date format ("dd/mm/yyyy, hh:mm:ss")
function dateToMyString(date) {
  var hour= date.getHours()
  var minute= date.getMinutes()
  var second = date.getSeconds()
  var day = date.getDate()
  var month = date.getMonth()
  var year = date.getFullYear()
  var time = hour + ((minute < 10) ? ":0" : ":") + minute  + ((second < 10) ? ":0" : ":") + second
  return day + ((month < 9) ? "/0" : "/") + (1+month) + "/" + year + ", " + time
}

// get today in my date format
function myToday() {
   var today = new Date();
   var myToday = dateToMyString(today);
   return myToday
}

// get document file last modification
function lastFileMod() {
  if (Date.parse(document.lastModified) != 0) {
    var mdate = new Date(document.lastModified);
    var myear = mdate.getFullYear();
    var mhour = mdate.getHours();
    var mminu = mdate.getMinutes();
    var mseco = mdate.getSeconds();

    var wday = new Array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");
    var mname = new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

    var pwday = wday[mdate.getDay()];
    var pday= mdate.getDate();
    var pmonth= mname[mdate.getMonth()];
//    var pyear = (myear < 2000) ? myear + 1900 : myear;
    var pyear = myear;
    var phour = (mhour < 10) ? "0" + mhour : mhour;
    var pminu = (mminu < 10) ? "0" + mminu : mminu;
    var pseco = (mseco < 10) ? "0" + mseco : mseco;

    return pwday + ", " + pday + " " + pmonth + " " + pyear + ", " + phour + ":" + pminu + "." + pseco;
  }
  return "Unknown date.";
}

// Cairo Nascimento sent in the following excellent JavaScript routine....
//
// Rejects: empty strings or strings full of blanks, 
//          strings without @ or without . (dot) 
// Rejects: A@, @B, A@B, .A@B, A@B., A@.B 
// Accepts: A@B.C, A.B@C.D

function ValidEmail(s) { 
    var Count; 
    var s2
    // empty or blank email 
    if (EmptyString(s) == true) 
       return (false)
    // email without @ 
    if (s.indexOf('@') == -1) 
       return (false)
    // email with @ as the 1st char 
    if (s.indexOf('@') == 0) 
       return (false)
    // email with @ as the last char 
    if ((s.indexOf('@')+1) == s.length) 
       return (false)
    // email without . 
    if (s.indexOf('.') == -1) 
       return (false)
    // email with . as the 1st char 
    if (s.indexOf('.') == 0) 
       return (false)
    // email with . as the last char 
    if ((s.indexOf('.')+1) == s.length) 
       return (false)
    // Now look for the first . after the first @ 
    // s2 = string after the first @ 
    s2=s.substring(s.indexOf('@')+1,s.length)
    // email without a dot after the first @ 
    if (s2.indexOf('.') == -1) 
       return (false)
    // email dot right after the first @ 
    if (s2.indexOf('.') == 0) 
       return (false)
    return (true)
} 

function EmptyString(s) { 
    var count; 
    var nBlank = 0; 
    if (str==null)
	return true;
    if (s.length == 0) 
	return (true); // empty string 
    // count the number of blank chars 
    for (count = 0; count < s.length; count++) { 
	if (s.charAt(count) == " ") nBlank++; 
    } 
    if (nBlank == s.length) 
	return (true); 
    else 
	return (false); 
}

function isEmpty(str) {
  if (str==null || str=="")
    return true;
  return false;
}
function trim(str) {
  if (str!=null) {
    while (str.charAt(str.length - 1)==" ")
      str = str.substring(0, str.length - 1);
    while (str.charAt(0)==" ")
      str = str.substring(1, str.length);
  }
  return str;
}
function trimAll(str) {
  if (str!=null) {
    while (str.length > 0 &&
      "\n\r\t ".indexOf(str.charAt(str.length - 1)) != -1)
      str = str.substring(0, str.length - 1);
    while (str.length > 0 &&
      "\n\r\t ".indexOf(str.charAt(0)) != -1)
      str = str.substring(1, str.length);
  }
  return str;
}
function isPositiveInteger(str) {
  var pattern = "0123456789"
  var i = 0;
  do {
    var pos = 0;
    for (var j=0; j<pattern.length; j++)
      if (str.charAt(i)==pattern.charAt(j)) {
        pos = 1;
        break;
      }
    i++;
  } while (pos==1 && i<str.length)  
  if (pos==0) 
    return false;
  return true;
} 

// hide email address to minimise spam
// Alexandros Labrinidis (labrinid@cs.pitt.edu)
function mailtagto(name, address, subject) {
    var email = name + '@' + address;
    var ret_str;
    ret_str = '<a href="mailto:' + email + '?subject=' + subject + '" title="e-mail">' + email + '</a>';
    return ret_str;
};
function mailtaglink(name, address, subject, link) {
    var email = name + '@' + address;
    var ret_str;
    ret_str = '<a href="mailto:' + email + '?subject=' + subject + '" title="e-mail">' + link + '</a>';
    return ret_str;
};

// changes rel=external to target=_blank
// http://www.sitepoint.com/print/1041
function externalLinks()
{
  if (document.getElementsByTagName)
  {
    var anchors = document.getElementsByTagName("a");
    for (var i=0; i<anchors.length; i++)
    {
      var anchor = anchors[i];
      if (anchor.getAttribute("href") && anchor.getAttribute("rel") == "external")
      {
        anchor.target = "_blank";
      }
    }
  }
}
//triggers the function when the document has finished loading
window.onload = externalLinks;

// end hiding script-->


