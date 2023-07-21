document.getElementById('submit').addEventListener('submit',(event)=>{
    event.preventDefault();
});

function result()
{
    document.getElementById('tname').innerHTML=document.getElementById("name").value;
    document.getElementById('tname1').innerHTML=document.getElementById("name").value;  
    //about rendering
    document.getElementById('tabout').innerHTML=document.getElementById("about").value;
    //linking profiles
    document.getElementById('tgithub').href=document.getElementById("github").value;
    document.getElementById('tlinkdin').href=document.getElementById("linkdin").value;
    //objectives
    document.getElementById('tobjectives').href=document.getElementById("objectives").value;
    //experience
    document.getElementById('t-experience-1').innerHTML=document.getElementById("experience-1").value;
    document.getElementById('t-experience-2').innerHTML=document.getElementById("experience-2").value;
    document.getElementById('t-experience-3').innerHTML=document.getElementById("experience-3").value;
    //qualification
    document.getElementById('t-qualification-1').innerHTML=document.getElementById("qualificaton").value;

    document.getElementById('cv-form').style.display='none';
    document.getElementById('cv-template').style.display='block';
    console.log("working");
}

function printCv()
{
    document.getElementById("resume-print").style.display='none';
    window.print();
}