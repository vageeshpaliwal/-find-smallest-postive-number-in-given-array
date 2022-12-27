const problemarray=[1,-1,2,4,3,-3];
var size= problemarray.length;
problemarray.sort();
var value=1;
for(var i=0;i<size;i++)
{
    if(problemarray[i]>value)
    {
      break;

    }
    if(problemarray[i]==value)
    {
        value=value+1;
    }

}
console.log(value);
