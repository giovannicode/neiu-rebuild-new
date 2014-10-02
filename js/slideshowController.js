/*******************
 Author:  GIOVANNI ARROYO

Last Update:  4/15/2013

 **********************/


//This function returns all of the Divs that represent the boxes in the slidshow
//This Allows the slideshow to have as many boxes as the user likes (the blue and yellow radio buttons will not be updated).
function getAllDivs()
{	
	var list = new CircleNodeList();
	
	$("#slider").children(".sldContentDiv").each(function()
	{
           list.add(  new CircleNode(  $(this).html()  )  );
	});
		
	if(list.size >= 4)
	{
	    var i = list.size;
	    while(i >= 2)
    	{
	    	$("#slider").children(".sldContentDiv").eq(i-1).remove();
	    	i--;
    	}
	}	 		
     start = list.start;
	 end = list.start.previous;	
}


//Constructor for the CircleNode to be used in CircleNodeList
function CircleNode(value)
{
	this.next = null;
	this.previous = null;
	this.value = value;
}

//Constructor for the CircleNodeList 
function CircleNodeList()
{
	this.start = null;
	this.end = null;
	this.size = 0;
}


//Adds another node to the CircleNodeList
CircleNodeList.prototype.add = function(circleNode)
{
	if(this.size == 0)
	{
		this.start = circleNode;
		this.end = circleNode;
		
		this.start.previous = this.end;
		this.start.next = this.end;
		
		this.end.previous = this.start;
		this.end.next = this.start;
		this.size++;
	}
	else
	{
		circleNode.next = this.start;
		
		this.end.next = circleNode;
		var temp = this.end;
		this.end = circleNode;
		this.end.previous = temp;
		
		this.start.previous = this.end;

		this.size++;
	}
};


//Returns the first node in the CircleNodeList
CircleNodeList.prototype.getStart = function()
{
	return this.start;
};