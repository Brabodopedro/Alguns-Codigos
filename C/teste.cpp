/*Ex 4 :Um jogador viciado de cassino deseja fazer umlevantamento
estatıstico simples sobre uma roleta.Para isso,ele fez n lancamentos
nesta roleta.Sabendo que uma roleta contem 37 numeros(de 0 a
36),calcular a frequencia de cada numero desta roleta nos n lancamentos realizados.*/

#include <stdio.h>

int main() {
	int n;
	scanf("numero de lançamentos: %d" &n); // Numero de lançamentos
	scanf("%d", %n)

	int resultados[n];  // Sequencia de lançamentos
	printf("Informe a sequencia que saiu:\n ")
    for (int i = 0; i < n; i++) {
        scanf("%d", &resultados[i]);
    }

    int frequencia[37] = {0};  // Inicializar um array para armazenar as frequências

    for (int i = 0; i < n; i++) {
        if (resultados[i] >= 0 && resultados[i] <= 36) {
            frequencia[resultados[i]]++;
        } else {
            printf("Número inválido: %d\n", resultados[i]);
        }
    }

    // Imprimir as frequências
    for (int i = 0; i < 37; i++) {
        printf("Número %d: %d vezes\n", i, frequencia[i]);
    }

    return 0;
}