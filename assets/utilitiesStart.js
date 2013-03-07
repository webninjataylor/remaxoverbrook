/*********************************************************************************************/
/*********************************************************************************************/
/******** Author:         Taylor Johnson                                              ********/
/******** Email:          taylor@tt-graphics.com                                      ********/
/******** Last Modified:  June 15, 2009                                               ********/
/******** Purpose:        Global variables and functions to be set as page is loading ********/
/*********************************************************************************************/
/*********************************************************************************************/
/******** GOOGLE ANALYTICS ********/
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-4401582-4']);
_gaq.push(['_trackPageview']);

(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
/**********************************/
/******** GLOBAL VARIABLES ********/
/**********************************/

/* Detect Browser */
var agent = navigator.userAgent.toLowerCase();
var isFF = (agent.indexOf('firefox') != -1);
var isIE = (agent.indexOf('msie') != -1);
var isSA = (agent.indexOf('safari') != -1);
var isIE6 = (navigator.appVersion.indexOf('MSIE 6.0') != -1);

/*Current URL and first level folder name*/
var currentURL = document.location;
var portal = currentURL.pathname.split("/")[1];

/* Today's date as yyyymmdd integer */
var today = new Date();
var months = ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"];
var monthsText = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
var weekDay = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
var days = ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31"];
today = parseInt(today.getFullYear() + "" + months[today.getMonth()] + "" + days[today.getDate()-1]);

/* Check hostname for filtering content */
var audience;
if (location.hostname == "science.nrao.edu"){
	audience = "science";
} else {
	audience = "epo";
}

/**********************************/
/******** GLOBAL FUNCTIONS ********/
/**********************************/

/*Process date integer (yyyymmdd) to text format   ...   processDate(news[i][1]); */
function processDate(date){
	date = date.toString();
	y = date.substring(0,4);
	m = monthsText[date.substring(4,6)-1];
	d = date.substring(6,8);
	if (d.charAt(0) == "0"){d = d.substring(1,2);}
	date = m+" "+d+", "+y;
	return(date);
}

/* Mask Emails */
function grimauld12(ww, f, h){
	var cmd1 = "ma";
	var cmd2 = "ilt";
	var cmd3 = "o:";
	location.href = cmd1+cmd2+cmd3+ww+"@"+f+"."+h;
}

/* Highlight current page in menus and breadcrumbs */
function highlight(currentURL) {
	var tabs;
	var tab;
	//Fix for root page menu highlighting ...
	if(currentURL.toString().charAt(currentURL.toString().length-1) == "/"){
		currentURL = currentURL.toString() + "index.shtml";
	}
	//******** Tab Menu ********
	//If there is a menuTop
	if(document.getElementById('menuTop')){
		
		
		
		//Clear active classes for bookmarks
		for(clear=0; clear<document.getElementById('menuTop').getElementsByTagName('a').length; clear++){
			if(document.getElementById('menuTop').getElementsByTagName('a')[clear].className == "active"){
				document.getElementById('menuTop').getElementsByTagName('a')[clear].className = "";
			}
		}
		//Set tabs to the main UL in the DIV
		tabs = document.getElementById('menuTop').getElementsByTagName('ul')[0];
		//Loop through the first level...
		for(i=0; i<tabs.childNodes.length; i++){
			// ... looking for the number of LIs (because it varies by browser)
			if(tabs.childNodes[i].nodeName == "LI"){
				tab = tabs.childNodes[i];
				//Loop through each tab looking for link match to current page's URL
				for(j=0; j<tab.getElementsByTagName('a').length; j++){
					tab.getElementsByTagName('a')[j].onclick = function() {highlight(this.href);}
					//Set class to active
					if(tab.getElementsByTagName('a')[j].href == currentURL){
						//Set the menu item link class to active...
						tab.getElementsByTagName('a')[j].className += " active";
						//... and the link class to active for Safari ...
						tab.getElementsByTagName('a')[j].parentNode.className += " active";
						// ... and display the tab section as the sidemenu for the current page
						tab.className += " active";
						tab.childNodes[0].className += " active";   //Set top-level LI's A class to "active"
						/*NEW*/
						highlightparent(tab.getElementsByTagName('a')[j].parentNode);
					}
				}
			}
		}
		if(portal == "A2010"){
			document.getElementById('science').className += " active";
			document.getElementById('decadal').className += " active";
			document.getElementById('science').childNodes[0].className += " active";
			document.getElementById('decadal').childNodes[0].className += " active";
		}
		if(portal == "naasc"){
			document.getElementById('facilities').className += " active";
			document.getElementById('naasc').className = " active";
			document.getElementById('facilities').childNodes[0].className += " active";
			document.getElementById('naasc').childNodes[0].className = " active";
		}
		if(portal == "evla"){
			document.getElementById('facilities').className += " active";
			document.getElementById('evla').className = " active";
			document.getElementById('facilities').childNodes[0].className += " active";
			document.getElementById('evla').childNodes[0].className = " active";
		}
		if(portal == "vao"){
			document.getElementById('vao').className = " active";
		}
	}
	//******** Side Menu ********
	//If there is a sidemenu
	if(document.getElementById('menuLeft')){
		//Clear active classes for bookmarks
		for(clear=0; clear<document.getElementById('menuLeft').getElementsByTagName('a').length; clear++){
			if(document.getElementById('menuLeft').getElementsByTagName('a')[clear].className == "active"){
				document.getElementById('menuLeft').getElementsByTagName('a')[clear].className = "";
			}
		}
		//Set tabs to the main UL in the sidemenu DIV
		tabs = document.getElementById('menuLeft').getElementsByTagName('ul')[0];
		//Loop through the first level...
		for(i=0; i<tabs.childNodes.length; i++){
			// ... looking for the number of LIs (because it varies by browser)
			if(tabs.childNodes[i].nodeName == "LI"){
				tab = tabs.childNodes[i];
				//Loop through each tab looking for link match to current page's URL
				for(j=0; j<tab.getElementsByTagName('a').length; j++){
					tab.getElementsByTagName('a')[j].onclick = function() {highlight(this.href);}
					//Set class to active unless the tab has no children
					if(tab.getElementsByTagName('a')[j].href == currentURL){
						//Set the menu item link class to active...
						tab.getElementsByTagName('a')[j].className = "active";
						//... and the link class to active for Safari ...
						tab.getElementsByTagName('a')[j].parentNode.className = "active";
						// ... and display the tab section as the sidemenu for the current page
						tab.className = "active";
						tab.childNodes[0].className = "active";   //Set top-level LI's A class to "active"
					}
				}
			}
		}
	}
	//******** Breadcrumbs ********
	//If there are breadcrumbs
	if(document.getElementById('breadcrumbs')){
		var breadcrumbs = document.getElementById('breadcrumbs');
		var links = document.getElementById('breadcrumbs').getElementsByTagName('a');
		for(i=0; i<links.length; i++){
			if(links[i].href == currentURL){
				links[i].className = "active";
				highlightparent(links[i].parentNode);
			}
		}
	}
}
function highlightparent(node){
	if(node.parentNode.nodeName == "LI"){
		node.parentNode.getElementsByTagName('a')[0].className = " active activeparent";
		node = node.parentNode;
		highlightparent(node);
	} else if(node.parentNode.nodeName != "HTML"){
		node = node.parentNode;
		highlightparent(node);
	}
}

/***************************/
/******** MOO TOOLS ********/
/***************************/

document.writeln('<script language="javascript" src="assets/mootools.v1.11.js"></script>');