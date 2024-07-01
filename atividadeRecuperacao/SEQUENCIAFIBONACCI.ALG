Algoritmo "SequenciaFibonacci"

var
   n, i, num1, num2, proximo: inteiro

inicio
   escreva("Quantos termos da sequência de Fibonacci você deseja exibir? ")
   leia(n)


   num1 <- 0
   num2 <- 1

   escreval("Sequência de Fibonacci com ", n, " termos:")

   escreva(num1, " ")

   se n > 1 entao
      escreva(num2, " ")
   fimse

   para i de 3 ate n faca
      proximo <- num1 + num2
      escreva(proximo, " ")

      num1 <- num2
      num2 <- proximo
   fimpara

fimalgoritmo