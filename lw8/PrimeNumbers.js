const errorMsg = "incorrect data";

function isPrimeNumber(values) {
  if ((typeof values !== "number") && (typeof values !== "object")) {
    console.log(errorMsg);
  } else if (typeof values == "number") {
    isPrimeElement(values);
  } else if (typeof values == "object") {
    for (let value of values) {
      isPrimeElement(value);
    }
  }
}

function isPrimeElement(value) {
  const primeMsg = " is prime number";
  const nPrimeMsg = " is not prime number";
  let isPrime = true;
  if (typeof (value) !== "number") {
    console.log(errorMsg)
  } else {
    if (value < 2) {
      isPrime = false;
    }
    for (i = 2; i < value; i++) {
      if (value % i === 0) {
        isPrime = false;
      }
    }
    if (isPrime) {
      console.log(value + primeMsg);
    } else {
      console.log(value + nPrimeMsg);
    }
  }
}