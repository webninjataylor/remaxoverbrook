/*****************************************************************************/
/*****************************************************************************/
/******** Author:         Taylor Johnson                              ********/
/******** Email:          taylor@tt-graphics.com                      ********/
/******** Last Modified:  June 15, 2009                               ********/
/******** Purpose:        Global scripts to run after page has loaded ********/
/*****************************************************************************/
/*****************************************************************************/

/* OnLoad handling for IE exception */
if(isIE){
	state();
	function state(){
		if(window.parent.document.readyState == "complete"){
			highlight(currentURL);
		} else {
			setTimeout ("state()", 0);
		}
	}
} else {
	window.onload = highlight(currentURL);
}