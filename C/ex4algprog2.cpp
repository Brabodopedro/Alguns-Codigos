#include <stdio.h>

int main() {
    int n;
    printf("Digite o numero de lancamentos: "); // Quantos lancamentos 
    scanf("%d", &n);

    int resultados[n];
    printf("Digite os resultados dos lancamentos:\n"); // Quais foram os lancamentos
    for (int i = 0; i < n; i++) {
        scanf("%d", &resultados[i]);
    }

    int frequencia[37] = {0};  // Inicializar um array com 37 possibilidades para armazenar as frequências

    for (int i = 0; i < n; i++) {
        if (resultados[i] >= 0 && resultados[i] <= 36) {
            frequencia[resultados[i]]++;
        } else {
            printf("Numero invalido: %d\n", resultados[i]);
        }
    }

    // Imprimir as frequências
    for (int i = 0; i < 37; i++) {
        printf("Numero %d: %d vezes\n", i, frequencia[i]);
    }

}