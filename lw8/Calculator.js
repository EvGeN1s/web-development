function calc(expression) {
  const incorrectTypeMsg = 'entered type must be string';
  if (typeof expression !== 'string') {
    console.log(incorrectTypeMsg);
  }
  let sign = /\+|\-|\*|\//;
  let digit = /[0-9]/;
  let expressionStack = [];
  expression = expression.replace(/[{()}]/g, '');
  expression = expression.replace(/\s+/g, ' ');
  console.log(expression);
  for (i = expression.length - 1; i >= 0; i--) {
    let isDigit = expression[i].search(digit);
    if(isDigit !== -1){
      let number = null;
      let rank = 0;
      while (isDigit !== -1) {
        number += (Number(expression[i])) * Math.pow(10, rank);
        i--;
        rank++;
        isDigit = expression[i].search(digit);
      }
      expressionStack.push(number);
    }
    let isSign = expression[i].search(sign);
    if (isSign !== -1) {
      let number1 = expressionStack.pop();
      let number2 = expressionStack.pop();
      expressionStack.push(calcTwo(expression[i], number1, number2));
    }

  }
  console.log(expressionStack.pop());
}
function calcTwo(operation, number1, number2) {
  switch (operation) {
    case "+":
      return number1 + number2;
    case "-":
      return number1 - number2;
    case "*":
      return number1 * number2;
    case "/":
      return number1 / number2;
  }
}

