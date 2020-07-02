var squads = document.all["squads"];

for(var i = 1; i <= 25; i++)
{
squads.innerHTML += "<div class='input-field col s4'>"+ 
"<input name='squad"+ i +"' type='text'><label for='last_name'>Slot "+ i +"º</label></div>"
}

