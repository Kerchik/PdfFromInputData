let addLanguage = () => {
    let arr = document.body.getElementsByClassName("language");
    let lastChildIndex = arr.length - 1;
    let additionalLanguages = arr.length - 3; 
    let div = document.createElement('div');
    div.innerHTML = `<div class='language'> <input class='langInput' placeholder='Ievadiet valodu' name='language[${additionalLanguages}][name]' ></input><p class='p'>Runātprasme: </p> <select name='language[${additionalLanguages}][speak]'> <option value='dzimtā'>dzimtā valoda</option> <option value='teicami'>teicami</option> <option value='labi'>labi</option> <option selected value='videji'>vidēji</option> <option value='pamatzinasanas'>pamatzināšanas</option> <option value='nav'>nav</option> </select><p class='p'>Lasītprasme: </p> <select name='language[${additionalLanguages}][read]'> <option value='dzimtā'>dzimtā valoda</option> <option value='teicami'>teicami</option> <option value='labi'>labi</option> <option selected value='videji'>vidēji</option> <option value='pamatzinasanas'>pamatzināšanas</option> <option value='nav'>nav</option> </select><p class='p'>Rakstītprasme: </p> <select name='language[${additionalLanguages}][write]'> <option value='dzimtā'>dzimtā valoda</option> <option value='teicami'>teicami</option> <option value='labi'>labi</option> <option selected value='videji'>vidēji</option> <option value='pamatzinasanas'>pamatzināšanas</option> <option value='nav'>nav</option> </select></div>`;
    arr[lastChildIndex].insertAdjacentHTML('afterend', div.innerHTML);
}
let addComputerKnowledge = () => {
    let arr = document.body.getElementsByClassName("computerKnowledge");
    let lastChildIndex = arr.length - 1;
    let additionalFields = arr.length - 2; 
    let div = document.createElement('div');
    div.innerHTML = `<div class='computerKnowledge'>  <input class='langInput' placeholder='Ievadiet nosaukumu' name='knowledge[${additionalFields}][name]></input><p class='p'>Zināšanu līmenis: </p> <select name='knowledge[${additionalFields}][level]'> <option value='dzimtā'>dzimtā valoda</option> <option value='teicami'>teicami</option> <option value='labi'>labi</option> <option selected value='videji'>vidēji</option> <option value='pamatzinasanas'>pamatzināšanas</option> <option value='nav'>nav</option> </select></div>`;
    arr[lastChildIndex].insertAdjacentHTML('afterend', div.innerHTML);
}
let addWork = () => {
    let arr = document.body.getElementsByClassName("work");
    let lastChildIndex = arr.length - 1;
    let additionalFields = arr.length - 1; 
    let div = document.createElement('div');
    div.innerHTML = `<div class='work'><input type='text' name='work[${additionalFields}][companyName]' placeholder='Darba vieta/Uzņēmums'/>
    <br />
    <input type='month' name='work[${additionalFields}][workStart]' max='2020-01' placeholder='Datums no'/>
    <br />
    <input type='month' name='work[${additionalFields}][workEnd]' max='2020-01' placeholder='Datums līdz'/>
    <br />
    <input type='text' name='work[${additionalFields}][position]' placeholder='Ieņemamais amats'/>
    <br />
    <input type='text' name='work[${additionalFields}][positionCategory]' placeholder='Amata kategorija'/>
    <br /> </div>`;
    arr[lastChildIndex].insertAdjacentHTML('afterend', div.innerHTML);
}
let addEdu = () => {
    let arr = document.body.getElementsByClassName("edu");
    let lastChildIndex = arr.length - 1;
    let additionalFields = arr.length - 1; 
    let div = document.createElement('div');
    div.innerHTML = `<div class='edu'>
    <input type='text' name='edu[${additionalFields}][eduName]' placeholder='Izglītības iestādes nosaukums'/>
    <br />
    <input type='text' name='edu[${additionalFields}][country]' placeholder='Valsts'/>
    <br />
    <input type='number' name='edu[${additionalFields}][startYear]' max='2020' placeholder='Gads no'/>
    <br />
    <input type='number' name='edu[${additionalFields}][endYear]' placeholder='Gads līdz'/>
    <br />
    <input type='text' name='edu[${additionalFields}][specialty]' placeholder='Specialitāte'/>
    </div>`;
    arr[lastChildIndex].insertAdjacentHTML('afterend', div.innerHTML);
}