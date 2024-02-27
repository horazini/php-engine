
## Lógica helénica (retórica) y lógica moderna (formal o matemática)

Lógica artistotélica:  
Arte de probar la verdad.

Lenguaje Formal:  
Lenguaje que cumple reglas fijas de formación de expresiones y significados.  
Lenguaje compuesto por un conjunto finito de símbolos que se combinan mediante reglas fijas de fomación de
expresiones (estructura) formando "Formulas Bien Formadas".  
El sistema de numeración decimal es un lenguaje formal: mediante un conjunto finito de símbolos (doce): "coma",
"negativo", y las diez cifras, y mediante un conjunto finito de reglas (el signo negativo puede estar o al extremo
izquierdo de la expresión o no estar, la coma debe estar entro dos cifras...) se pueden generar infinitas
expresiones pertenecientes al lenguaje, esto se llama infinitud discreta. Por medio de la recursión, se pueden
modelar sistemas infinitos de forma finita.

Formula Bien Formada (FBF):  
Cadena de caracteres o palabra generada según una gramática formal a partir de un alfabeto dado.
Un lenguaje formal se define como el conjunto de todas sus fórmulas bien formadas.

Fórmula atómica (o átomo):  
FBF que no tiene una estructura formal más profunda, no contiene conectivas lógicas ni subfórmulas estrictas.  
FBF más simples del lenguaje de la lógica.

Fórmulas compuestas (o moleculares):  
FBF formadas combinando las fórmulas atómicas usando las constantes lógicas.

<hr>

## Proposiciones: Entidades portadoras de los valores de verdad (verdadero / falso).

Proposición:  
En un lenguaje formal, una proposición es una cadena de signos que constituye una FBF que expresa un contenido
semántico
al que, bajo cierto procedimiento, es posible asignarle un valor de verdad.

Postulado:  
Proposición no evidente por sí misma ni demostrada, pero que se acepta, ya que no existe otro principio al que pueda
ser referida.  
En lógica moderna, FBF utilizada en una deducción para llegar a una conclusión.

Axioma:  
Para los matemáticos helenísticos, proposición evidente que se asume como cierta sin demostración previa.
En un sistema hipotético-deductivo, toda proposición no deducida de otras, sino que constituye una regla general de
pensamiento lógico (por oposición a los postulados).  
En lógica y matemáticas, premisa que se asume, con independencia de que sea o no evidente, y que se usa para
demostrar otras proposiciones.

Premisa:  
Proposiciones que anteceden a la conclusión del argumento. En un argumento válido, las premisas implican la
conclusión.

## Inferencias

Inferencia:  
Proceso por el cual se derivan conclusiones a partir de premisas.  
Metodos para usar afirmaciones existentes y derivar en nuevas afirmaciones, que se utilizan para preservar la
verdad.  
(los axiomas o teoremas existentes son verdaderos, y por las reglas de inferencia, tambien lo son los nuevos
teoremas)

## Sistema de pruebas helenístico

A partir de uno o varios axiomas, se usan reglas de inferencia para demostrar un teorema
Se distinguen tres clases de inferencias: deducciones, inducciones y abducciones
(aunque a veces se cuenta a la abducción como un caso especial de inducción).

Deducción:  
De general a particular

Inducción:  
De particular a general (las premisas apoyan la conclusión, pero no la garantizan)

Abducción:  
A partir de una regla particular (Todos los A son B) y una general (c es B) se infiere el caso (c es A).  
Conjeturas espontáneas de la razón, de la imaginación y del instinto. Sugerencia. Destello de comprensión.  
Según Peirce, la "abducción es el primer paso del razonamiento científico", ya que desde el inicio se efectúa una
restricción de hipótesis aplicables a un fenómeno.

### Esquema deductivo: (( )) , (.) --> ( . )

Regla general: Todos los X son Y (Todos los hombres son mortales)  
Caso: x es X (socrates es un hombre)  

R. particular: x es Y (socrates es mortal)

### Esquema inductivo: (.) , ( . ) --> (( ))

Caso: x es X (socrates es un hombre)  
R. particular: x es Y (socrates es mortal)

Regla general: Todos los X son Y (Todos los hombres son mortales)

### Esquema abductivo: ( . ) , (( )) --> (.)

R. particular: x es Y (socrates es mortal)  
Regla general: Todos los X son Y (Todos los hombres son mortales)

Caso: x es X (socrates es un hombre)

## Lógica matemática

En lógica moderna, se llama inferencia lógica (o Cálculo lógico) a la aplicación de
una regla de transformación que permite transformar una FBF de un sistema formal en otra FBF, como teorema del mismo sistema.

Demostrar teoremas es un asunto central en la lógica matemática.  
La lógica investiga los fundamentos por los cuales algunas inferencias son aceptables, y otras no.  
Cuando una inferencia es aceptable, lo es por su estructura lógica y no por el contenido específico del argumento o el lenguaje utilizado (retórica). Por esto se construyen sistemas lógicos que capturan los factores relevantes de las deducciones que aparecen en el lenguaje natural.  
En la Teoría de la demostración, las demostraciones son secuencias de FBF con
ciertas propiedades, donde la última fórmula de la secuencia (Teorema) es aquello que se demuestra.

Teoría de la demostración o teoría de la prueba:  
Rama de la lógica matemática que trata a las demostraciones como objetos
matemáticos, facilitando su análisis mediante técnicas matemáticas. Las demostraciones suelen presentarse como
estructuras de datos inductivamente definidas que se construyen de acuerdo con los axiomas y reglas de
inferencia de los sistemas lógicos. En este sentido, la teoría de la demostración se ocupa de la
sintaxis, en contraste con la teoría de modelos, que trata con la semántica. La teoría de la demostración
es uno de los «cuatro pilares» de los fundamentos de las matemáticas.

## Teorema: Proposición cuya verdad se demuestra.

Teorema:  
Proposición matemática demostrada mediante inferencias lógicas a partir de axiomas o
premisas que se consideran autoevidentes.  
FBF demostrada dentro de un sistema formal, partiendo de axiomas u otros teoremas ya
demostrados.  
Un teorema requiere de un marco lógico: conjunto de axiomas (sistema axiomático) y
un proceso de inferencia, el cual permite derivar teoremas a partir de los axiomas y teoremas que
han sido derivados
pero no son axiomas.

Corolario: Consecuencia inmediata de un teorema.

Lema: Afirmación (teorema) que forma parte de un teorema más amplio.

Conjetura o hipótesis: Enunciado matemático que se supone verdadero, aún no
demostrado.