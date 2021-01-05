/*Mutant Crawl Classics Character Generator
designed by Mark Tasaka 2021*/


function addModifierSign (modifer)
{
    var value = "";
    
    if(modifer >=0)
        {
            value = "+" + modifer;
        }
    else
    {
        value = modifer;
    }
    
    return value;
}

