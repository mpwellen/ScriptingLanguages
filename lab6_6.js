function BinaryReversal(){
	var str=prompt("enter number");
	var arr=str.split("");
	
	var count=1;
	var sum=0;
	for(var x=str.length;x--;x>0)
	{
		console.log(arr[x]);
		if(arr[x]=='1')
		{
			sum=sum+count;
		}
		else if(arr[x]=='0')
		{
		}
		else{
			sum=-1;
			alert("Bad input!");
			break;
		}
		count=count*2;
	}
	console.log(sum);
	alert("Converted: " + sum);
	return sum;
	
}