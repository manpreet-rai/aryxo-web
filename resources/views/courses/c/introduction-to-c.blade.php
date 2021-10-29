<h1 id="introduction-to-c" class="title">Introduction to C</h1>
<p class="paragraph">C is a general purpose programming language which was designed by <strong>Dennis Ritchie</strong> which appeared first in <strong>1972</strong>. C is a <strong>low level</strong> programming language which means its code is directly converted into machine language by the tool called <strong>compiler</strong>.</p>
<h2 id="brief-history" class="heading">Brief History</h2>
<p class="paragraph">C was initially designed for and implemented on <strong>UNIX</strong> operating system by Dennis Ritchie. The operating system as well as the tools such as compilers and all UNIX applications were written in C.</p>
<p class="paragraph">The language is not necessarily tied to any operating system in general and can be used to create applications which can be supported by multiple operating systems.</p>
<p class="paragraph">Many of the important ideas in C are influenced from <strong>BCPL</strong> (Basic Combined Programming Language) and in particular the <strong>B</strong> language which was designed by <strong>Ken Thompson</strong> who was a fellow of Dennis Ritchie at <strong>Bell Laboratories</strong> (USA) which served as the centre for creation of B and C languages and UNIX itself and many more technologies.</p>
<h2 id="features" class="heading">Features</h2>
<p class="paragraph">C programming language offers many features, some of these are shown in the figure below.</p>
<p class="paragraph">@include('figures/c/chapter-1-fig-1')</p>
<p class="center"><span class="caption">Some features of C</span></p>
<h3 id="low-level" class="subheading">Low Level</h3>
<p class="paragraph">C is low level programming language which means the final code is directly understood by the processor, which improves efficiency and unmatched performance. C is used to write kernel and system software such as drivers due to its low level nature</p>
<h3 id="structures" class="subheading">Structures</h3>
<p class="paragraph">C can be used in data structures as a prominent way to store data in an efficient and organized manner. C has many ways to handle data such as arrays, stacks, queue, linked lists and trees but not limited to these only.</p>
<h3 id="libraries" class="subheading">Libraries</h3>
<p class="paragraph">C has an extensive list of libraries which provides additional functionality to already existing language set. Some prominent libraries includes <strong>math.h</strong> for mathematical tasks, <strong>string.h</strong> for handling string related data, <strong>time.h</strong> for date and time related tasks and many more.</p>
<h3 id="fast" class="subheading">Fast</h3>
<p class="paragraph">C is exceptionally fast. The fact that it being a low level language makes it easy to convert the code written in C to machine language with minimum overhead.</p>
<h3 id="pointers" class="subheading">Pointers</h3>
<p class="paragraph">Pointers provide easy and direct access to memory. These allow faster manipulation in memory and impacts performance of the final product.Pointers can be used for arrays, memories, structures, and functions.</p>
<h3 id="portable" class="subheading">Portable</h3>
<p class="paragraph">The aim for C was a language which could be portable, means the applications written once can be used anywhere with minimal hassle. C provided such portability, as the compilers are designed for almost any type of device, the code compilation for new hardware is very easy.</p>
<h2 id="sample-program" class="heading">Sample Program</h2>
<p class="paragraph">Let's see what a simple <strong>'Hello World'</strong> program looks like in C. This program is a standard practice done by new programmers to see how things are laid down in new programming language environment with minimum setup. This sample program is written in <strong>hello.c</strong> file, which gives the shown result after execution. We will discuss in depth about this program shortly.</p>
<p class="filename">hello.c</p>
<pre><code class="language-c">#include&lt;stdio.h&gt;

int main(int argc, char **argv) {
    printf(&quot;Hello World\n&quot;);
    return 0;
}
</code></pre>
<pre><code class="language-nothing">output&gt; Hello World
</code></pre>