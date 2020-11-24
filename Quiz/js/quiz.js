
var position = 0; // see where the user is at
var test; // the quiz
var progress; // heading displaying what question you're on
var q; //question from the array
var pick; // picked answer
var picks; // possible answers
var AA, BB, CC; // possible answers
var right = 0; // correct answers
var qs = [ // array of questions and answers
	{
	  q: "How do viruses replicate?",
      a: "Through sexual reproduction",
      b: "Through asexual reproduction",
	  c: "By using host cell mechanisms",
      ans: "C"
	},
	{
      q: "Which cells does SARS-CoV-2 mostly infect?",
      a: "Epithelial Cells",
      b: "Macrophages",
      c: "Dendridic Cells",
      ans: "A"
    },
	{
      q: "Which receptor does SARS-CoV-2 bind to using it's outter spikes?",
      a: "Insulin-like Growth Factor 1 (IGF-1)",
      b: "Angiotensin-Converting Enzyme 2 (ACE-2)",
      c: "Cyclooxygenase-2 COX-2",
      ans: "B"
    },
	{
      q: "How does the virus exit the cell after replication?",
      a: "Exocytosis",
      b: "Lysis",
      c: "Lysogenisis",
      ans: "A"
    },
	{
      q: "What causes all of the damage to the organs?",
      a: "Viral replication and cell lysis.",
      b: "The hosts own immune responce to the infection.",
      c: "This disease makes you stronger not weaker.",
      ans: "B"
    },
	{
      q: "What is the rate of infection from cell to cell?",
      a: "Linear",
      b: "Circular",
      c: "Exponential",
      ans: "C"
    },
	{
      q: "What is the name of the molecule immune cells use to communicate with each other?",
      a: "Hormones",
      b: "Catecholamines ",
      c: "Cytokines",
      ans: "C"
    },
	{
      q: "How do Neutrophiles react to a distressed cell or foreign object?",
      a: "Release Acid.",
      b: "Release Granules.",
      c: "Release the Kraken.",
      ans: "B"
    },
	{
      q: "How do Natural Killer T Cells react to a distressed cell or foreign object?",
      a: "Call for help.",
      b: "Trigger cell suicide.",
      c: "Release Granules.",
      ans: "B"
    },
	{
      q: "What is the name of the scarring that occures as a result of the immune reponse triggered by SARS-CoV-2?",
      a: "Ecchymosis",
      b: "Hematoma",
      c: "Fibrosis",
      ans: "C"
    }
  ];
function getE(i){ // makes using the get element by id function easier
	return document.getElementById(i);
}
function generateQs() { // generates questions
	test = getE("test");
	if(position >= qs.length){
		test.innerHTML = "<h1>You answered " + right + " correctly of " + qs.length + " questions.</h1>";
		getE("progress").innerHTML = "Test Finished!";
		position = 0;
		right = 0;
		return false;
	} // if
	getE("progress").innerHTML = "<h1>You're on question " + (position+1) + " of " + qs.length + "</h1>";
  
	q = qs[position].q;
	AA = qs[position].a;
	BB = qs[position].b;
	CC = qs[position].c;
	test.innerHTML = "<h2>" + q + "</h2>"; // shows the question
	// each right answer appends the test data
	test.innerHTML += "<label> <input type='radio' name='picks' value='A'> " + AA + "</label><br>";
	test.innerHTML += "<label> <input type='radio' name='picks' value='B'> " + BB + "</label><br>";
	test.innerHTML += "<label> <input type='radio' name='picks' value='C'> " + CC + "</label><br><br><br>";
	test.innerHTML += "<button onclick='checkAns()'>Submit Answer</button>";
}
function checkAns() { // checks to see if the answer is right
	picks = document.getElementsByName("picks");
	for(var i = 0; i < picks.length; i++) {
		if(picks[i].checked) {
			pick = picks[i].value;
		}
	}
	if(pick == qs[position].ans) { // checks if answer is right
		right++; // increases when right
	}
	position++;
	generateQs(); // goes to the next question
}
// Add event listener to call renderQuestion on page load event
window.addEventListener("load", generateQs);