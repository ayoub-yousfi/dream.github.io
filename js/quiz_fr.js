
   const myQuestions = [
  {
    question: "Elle montre _____ photos de Nice.", //#1
    answers: {
      a: "une",
      b: "les",
      c: "des",
      d: "la"
    },
    correctAnswer: "b"
  },
  {
    question: "Elles _____ Italiennes, elles _____ 17 et 18 ans.", //#2
    answers: {
      a: "ont, sont",
      b: "est, ont",
      c: "sont, ont",
      d: "sommes, avons"
    },
    correctAnswer: "c"
  },
  {
    question: "Vous avez _____ âge?", //#3
    answers: {
      a: "quelle",
      b: "quel",
      c: "quelles",
      d: "quels"
    },
    correctAnswer: "b"
  },
  {
    question: "Martine a des amis _____ Japon, _____Etats-Unis, _____ Pologne.", //#4
    answers: {
      a: "au, aux, en",
      b: "en, au, au",
      c: "en, aux, en",
      d: "en, au, en"
    },
    correctAnswer: "a"
  },
  {
    question: "Pouur moi _____ café au lait, s'il vous plaît.", //#5
    answers: {
      a: "du",
      b: "de",
      c: "de la",
      d: "des"
    },
    correctAnswer: "a"
  },
  {
    question: "En France _____ déjeune en général à 12h30.", //#6
    answers: {
      a: "nous",
      b: "vous",
      c: "on",
      d: "tu"
    },
    correctAnswer: "c"
  },
  {
    question: "Je suis désolé, mais je ne peux pas venir chez _____ ce soir.", //#7
    answers: {
      a: "toi",
      b: "ton",
      c: "tu",
      d: "ils"
    },
    correctAnswer: "a"
  },
  {
    question: "Ne prends pas _____ chaise, elle est cassée.", //#8
    answers: {
      a: "cette",
      b: "ce",
      c: "cet",
      d: "ces"
    },
    correctAnswer: "a"
  },
  {
    question: "L'euro est la _____ unique de l'Union européenne.", //#9
    answers: {
      a: "monétaire",
      b: "argent",
      c: "monnaie",
      d: "couronne"
    },
    correctAnswer: "c"
  },
  {
    question: "Hier, M.Lafont _____ au bureau toute la matinée.", //#10
    answers: {
      a: "a été",
      b: "a",
      c: "est",
      d: "es"
    },
    correctAnswer: "a"
  },
  {
    question: "Tu as parlé à tes parents? - Oui, je _____ ai téléphoné hier.", //#11
    answers: {
      a: "lui",
      b: "leur",
      c: "leurs",
      d: "elle"
    },
    correctAnswer: "b"
  },
  {
    question: "Je vais rester chez moi, la date de l'excursion ne _____ arrange pas.", //#12
    answers: {
      a: "te",
      b: "m'",
      c: "la",
      d: "l'"
    },
    correctAnswer: "b"
  },
  {
    question: "Il reste encore beaucoup à faire, pensez-_____?", //#13
    answers: {
      a: "en",
      b: "y",
      c: "de",
      d: "à"
    },
    correctAnswer: "b"
  },
  {
    question: "Elle parle des personnes _____ l'entourent.", //#14
    answers: {
      a: "que",
      b: "qui",
      c: "quoi",
      d: "où"
    },
    correctAnswer: "b"
  },
  {
    question: "Est-ce que je peux essayer cette robe? - Non, je m'excuse, _____ , elle est vendue.", //#15
    answers: {
      a: "celles-là",
      b: "celui-là",
      c: "ceux-ci",
      d: "celle-là"
    },
    correctAnswer: "d"
  },
  {
    question: "Ils nous attendent _____ l'intérieur du café.", //#16
    answers: {
      a: "dans",
      b: "sur",
      c: "à",
      d: "en"
    },
    correctAnswer: "c"
  },
  {
    question: "Diamnche, je _____ la France.", //#17
    answers: {
      a: "quitte",
      b: "quittes",
      c: "va quitter",
      d: "vient de quitter"
    },
    correctAnswer: "a"
  },
  {
    question: "Je connais le roman _____ vous parlez.", //#18
    answers: {
      a: "quelle",
      b: "qui",
      c: "que",
      d: "dont"
    },
    correctAnswer: "d"
  },
  {
    question: "Tu ne m'écoutes pas ?", //#19
    answers: {
      a: "Si, je t'écoute.",
      b: "Oui, je t'écoute.",
      c: "Non, je n'écoute pas.",
      d: "Oui, je n'écoute."
    },
    correctAnswer: "a"
  },
  {
    question: "Je prépare le goûter pour les enfants. Je le prépare pour _____ .", //#20
    answers: {
      a: "nous",
      b: "ils",
      c: "eux",
      d: "elles"
    },
    correctAnswer: "c"
  },
  {
    question: "Elle aime _____ chocolat.", //#21
    answers: {
      a: "un",
      b: "la",
      c: "du",
      d: "le"
    },
    correctAnswer: "d"
  },
  {
    question: "C'est le manuel _____ vous avez besoin pour votre examen.", //#22
    answers: {
      a: "dont",
      b: "que",
      c: "qui",
      d: "auquel"
    },
    correctAnswer: "a"
  },
  {
    question: "Il ne boit jamais _____ bière, il est diabétique.", //#23
    answers: {
      a: "de",
      b: "de l'",
      c: "du",
      d: "la"
    },
    correctAnswer: "d"
  },
  {
    question: "Tu prends du fromage? -Oui, j'_____ prends un peu.", //#24
    answers: {
      a: "le",
      b: "y",
      c: "la",
      d: "en"
    },
    correctAnswer: "d"
  },
  {
    question: "Nous habitons _____ gare.", //#25
    answers: {
      a: "derrière de",
      b: "à coté de la",
      c: "devant",
      d: "près de"
    },
    correctAnswer: "b"
  },
  {
    question: "Ils restent à Nice _____ .", //#26
    answers: {
      a: "pour un mois",
      b: "dans un mois",
      c: "il y a un mois",
      d: "pendant un mois"
    },
    correctAnswer: "d"
  },
  {
    question: "Ces fleurs sont à Monique? -Oui, elles sont à _____ .", //#27
    answers: {
      a: "lui",
      b: "moi",
      c: "la",
      d: "elle"
    },
    correctAnswer: "a"
  },
  {
    question: "Je _____ présenterai.", //#28
    answers: {
      a: "me la",
      b: "vous lui",
      c: "te le",
      d: "lui les"
    },
    correctAnswer: "c"
  },
  {
    question: "Vous attendez quelqu'un? - _____ .", //#29
    answers: {
      a: "Non, je n'attends jamais.",
      b: "Non, rien.",
      c: "Non, je n'attends pas.",
      d: "Non, je n'attends personne."
    },
    correctAnswer: "d"
  },
  {
    question: "Le train pour Lyon part _____ dix minutes.", //#30
    answers: {
      a: "depuis",
      b: "à",
      c: "dans",
      d: "il y a"
    },
    correctAnswer: "c"
  },
  {
    question: "S'il fait chaud, nous _____ nous baigner.", //#31
    answers: {
      a: "vont",
      b: "inront",
      c: "irons",
      d: "sommes allés"
    },
    correctAnswer: "b"
  },
  {
    question: "Elle voudrait qu'il _____ .", //#32
    answers: {
      a: "venu",
      b: "vient",
      c: "vienne",
      d: "viens"
    },
    correctAnswer: "c"
  },
  {
    question: "Que signifie le signe T.G.V ? - _____ .", //#33
    answers: {
      a: "Train à grandes voitures.",
      b: "Train à grandes volants",
      c: "Train de grandes villes",
      d: "Train à grand vitesse"
    },
    correctAnswer: "d"
  },
  {
    question: "Montrez- _____ !", //#34
    answers: {
      a: "la moi",
      b: "le me",
      c: "me la",
      d: "moi le"
    },
    correctAnswer: "d"
  },
  {
    question: "Il faut que vous _____ parlez plusieurs langues étrangères.", //#35
    answers: {
      a: "savez",
      b: "saviez",
      c: "avez su",
      d: "sachiez"
    },
    correctAnswer: "d"
  },
  {
    question: "Le mois dernier ils _____ à la campagne.", //#36
    answers: {
      a: "ont eu",
      b: "seront",
      c: "étaient",
      d: "sont"
    },
    correctAnswer: "c"
  },
  {
    question: "Si elle voulait, _____ .", //#37
    answers: {
      a: "elle l'a invité",
      b: "elle l'invitera",
      c: "elle l'inviterait",
      d: "elle l'invite"
    },
    correctAnswer: "c"
  },
  {
    question: "Jean ne désire pas q'ils _____ .", //#38
    answers: {
      a: "parte",
      b: "partiront",
      c: "sont partis",
      d: "partent"
    },
    correctAnswer: "d"
  },
  {
    question: "Comme il avait un rendez-vous, il n'a pas pu rester _____ la fin de la réunion.", //#39
    answers: {
      a: "dans",
      b: "jusqu'à",
      c: "pendant",
      d: "sans"
    },
    correctAnswer: "b"
  },
  {
    question: "Quelles merveilleuses vacances ils ont _____ en Allemagne?", //#40
    answers: {
      a: "passés",
      b: "passé",
      c: "passées",
      d: "passer"
    },
    correctAnswer: "c"
  },
  {
    question: "On attend le résultat, _____ il soit.", //#41
    answers: {
      a: "quelle que",
      b: "quel qu'",
      c: "quel que",
      d: "quels qu'"
    },
    correctAnswer: "b"
  },
  {
    question: "Le grand art d'écrire, _____ de supprimer ce qui est inutile.", //#42
    answers: {
      a: "ses",
      b: "ces",
      c: "c'est",
      d: "s'est"
    },
    correctAnswer: "c"
  },
  {
    question: "Il est bon _____ géographie.", //#43
    answers: {
      a: "avec",
      b: "dans la",
      c: "sur",
      d: "en"
    },
    correctAnswer: "d"
  },
  {
    question: "Je veux aider des enfants _____ .", //#44
    answers: {
      a: "sourd-muet",
      b: "sourds-muet",
      c: "sourd-muets",
      d: "sourds-muets"
    },
    correctAnswer: "d"
  },
  {
    question: "C'est moi qui _____ sorti le dernier.", //#45
    answers: {
      a: "est",
      b: "ai",
      c: "a",
      d: "suis"
    },
    correctAnswer: "a"
  },
  {
    question: "_____ des deux candidats arrivera-t-il en finale?", //#46
    answers: {
      a: "Lequel",
      b: "Quels",
      c: "Quel",
      d: "Auquel"
    },
    correctAnswer: "a"
  },
  {
    question: "_____ Guernica en 1936, Picasso a voulu montré l'horreur de la guerre.", //#47
    answers: {
      a: "Etant peint",
      b: "Ayant peint",
      c: "Peignant",
      d: "En peignant"
    },
    correctAnswer: "d"
  },
  {
    question: "Je frai ce travail avec _____ plaisir, pour vous rendre service.", //#48
    answers: {
      a: "du",
      b: "le",
      c: "la",
      d: "/"
    },
    correctAnswer: "a"
  },
  {
    question: "La symphonie que nous avons _____ au concert est de Mozart.", //#49
    answers: {
      a: "entendu",
      b: "entendre",
      c: "entente",
      d: "entendue"
    },
    correctAnswer: "d"
  },
  {
    question: "J'ai téléphoné à la maison, mais tu _____ depuis une heure.", //#50
    answers: {
      a: "partais déjà",
      b: "est déjà parti",
      c: "es déjà parti",
      d: "étais déjjà parti"
    },
    correctAnswer: "d"
  }
];
  (function(){
  // Functions
  function buildQuiz(){
    // variable to store the HTML output
    const output = [];

    // for each question...
    myQuestions.forEach(
      (currentQuestion, questionNumber) => {

        // variable to store the list of possible answers
        const answers = [];

        // and for each available answer...
        for(letter in currentQuestion.answers){

          // ...add an HTML radio button
          
          answers.push(
            `<label>
            <input type="radio" name="question${questionNumber}" value="${letter}">
              ${letter} : ${currentQuestion.answers[letter]}
            </label>`
          );
        }
        
        // add this question and its answers to the output
        output.push(
          `<div class="slide">
            <div class="question">${questionNumber +1}. ${currentQuestion.question} </div>
            <div class="answers"> ${answers.join("")} </div>
          </div>`
        );
      }
    );

    // finally combine our output list into one string of HTML and put it on the page

    quizContainer.innerHTML = output.join('');
  }

  function showResults(){

    // gather answer containers from our quiz
    const answerContainers = quizContainer.querySelectorAll('.answers');

    // keep track of user's answers
    let numCorrect = 0;

    // for each question...
    myQuestions.forEach( (currentQuestion, questionNumber) => {

      // find selected answer
      const answerContainer = answerContainers[questionNumber];
      const selector = `input[name=question${questionNumber}]:checked`;
      const userAnswer = (answerContainer.querySelector(selector) || {}).value;

      // if answer is correct
      if(userAnswer === currentQuestion.correctAnswer){
        // add to the number of correct answers
        numCorrect++;

        // color the answers green
        //answerContainers[questionNumber].style.color = 'lightgreen';
      }
      // if answer is wrong or blank
      else{
        // color the answers red
        //answerContainers[questionNumber].style.color = 'red';
      }
    });
    if((numCorrect>=0) && (numCorrect<=22))
    {
      // show number of correct answers out of total
    resultsContainer.innerHTML = `Votre niveau est A1`;
    }
    if((numCorrect>=23) && (numCorrect<=34))
    {
      // show number of correct answers out of total
    resultsContainer.innerHTML = `Votre niveau est A2`;
    }
    if((numCorrect>=35) && (numCorrect<=41))
    {
      // show number of correct answers out of total
    resultsContainer.innerHTML = `Votre niveau est B1`;
    }
    if((numCorrect>=42) && (numCorrect<=46))
    {
      // show number of correct answers out of total
    resultsContainer.innerHTML = `Votre niveau est B2`;
    }
    if((numCorrect>=47) && (numCorrect<=50))
    {
      // show number of correct answers out of total
    resultsContainer.innerHTML = `Votre niveau est C1`;
    }
    // show number of correct answers out of total
    //resultsContainer.innerHTML = `${numCorrect} out of ${myQuestions.length}`;
    //window.alert(numCorrect + " sur " myQuestions.length);
  }

  function showSlide(n) {
    slides[currentSlide].classList.remove('active-slide');
    slides[n].classList.add('active-slide');
    currentSlide = n;
    if(currentSlide === 0){
      previousButton.style.display = 'none';
    }
    else{
      previousButton.style.display = 'inline-block';
    }
    if(currentSlide === slides.length-1){
      nextButton.style.display = 'none';
      submitButton.style.display = 'inline-block';
    }
    else{
      nextButton.style.display = 'inline-block';
      submitButton.style.display = 'none';
    }
  }

  function showNextSlide() {
    showSlide(currentSlide + 1);
  }

  function showPreviousSlide() {
    showSlide(currentSlide - 1);
  }

  // Variables
  const quizContainer = document.getElementById('quiz');
  const resultsContainer = document.getElementById('results');
  const submitButton = document.getElementById('submit');


  // Kick things off
  buildQuiz();

  // Pagination
  const previousButton = document.getElementById("previous");
  const nextButton = document.getElementById("next");
  const slides = document.querySelectorAll(".slide");
  let currentSlide = 0;

  // Show the first slide
  showSlide(currentSlide);

  // Event listeners
  submitButton.addEventListener('click', showResults);
  previousButton.addEventListener("click", showPreviousSlide);
  nextButton.addEventListener("click", showNextSlide);
})();

