function drawSquare(x,y,length,level,context){
	if(level<4){
		context.fillStyle="rgba(0,0,0,1)";
		if(level==1)
			context.fillStyle="rgba(150,0,0,1)";
		else if(level==2)
			context.fillStyle="rgba(0,150,0,1)";
		else if(level==3)
			context.fillStye="rgba(0,0,150,1)";
		else
			context.fillStyle="rgba(50,50,50,1)";
		context.fillRect(x,y,length,length);
		level+=1;
		length=length/2;
		x+=length;
		drawSquare(x,y,length,level,context);
	}
}

function draw(startX, startY, angle, len,level) {
  var c = document.getElementById("myCanvas");
  var ctx = c.getContext("2d");
  var ang=angle;
  ctx.beginPath();
  ctx.save();
  
  ctx.translate(startX, startY);
  ctx.rotate(angle * Math.PI/180);
  ctx.moveTo(0, 0);
  ctx.lineTo(0, -len);
  ctx.stroke();
  
  if(level < 1) {
    ctx.restore();
    return;
  }
  level=level-1;
  draw(0, -len, 90,len*0.5,level);
  draw(0, -len, -90,len*0.5,level);
  draw(0, -len,0,len*0.5,level);
  ctx.stroke();
  ctx.restore();
}

	