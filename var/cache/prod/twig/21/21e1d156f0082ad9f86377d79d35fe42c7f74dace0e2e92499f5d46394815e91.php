<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* literature/read.html.twig */
class __TwigTemplate_89a5a78ab444b27e9a22c38080254bccace1e441b99e07c4a38a49425a0dc186 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'literatureActive' => [$this, 'block_literatureActive'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "literature/read.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello LiteratureController!";
    }

    // line 5
    public function block_literatureActive($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "active";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 90%; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }

    .content-block div {
        margin: 2rem 0;
    }

    .content-block div p {
        margin: 0;
        line-height: 2rem
    }
</style>

<div class=\"example-wrapper\">
    <h1>Présentation de la Poésie</h1>
    <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("literature_browse");
        echo "\" class=\"btn btn-primary\">Retour à la liste des poésies</a>
    ";
        // line 25
        if ( !(twig_get_attribute($this->env, $this->source, ($context["literature"] ?? null), "displayable", [], "any", false, false, false, 25) === true)) {
            // line 26
            echo "        <p class=\"error-message\" style=\"color: red; margin: 3rem 0; text-align: center\">Il manque des informations pour pouvoir afficher la news sur le site !</p>
        <ul>
            ";
            // line 28
            echo (((twig_get_attribute($this->env, $this->source, ($context["literature"] ?? null), "title", [], "any", false, false, false, 28) == null)) ? ("<li>Manque le titre de la citation/poésie</li>") : (""));
            echo "
            ";
            // line 29
            echo (((twig_get_attribute($this->env, $this->source, ($context["literature"] ?? null), "author", [], "any", false, false, false, 29) == null)) ? ("<li>Manque l'autrice/auteur</li>") : (""));
            echo "
            ";
            // line 30
            echo (((twig_get_attribute($this->env, $this->source, ($context["literature"] ?? null), "textstyle", [], "any", false, false, false, 30) == null)) ? ("<li>Manque le style de citations/poésie</li>") : (""));
            echo "
            ";
            // line 31
            echo (((twig_get_attribute($this->env, $this->source, ($context["literature"] ?? null), "content", [], "any", false, false, false, 31) == null)) ? ("<li>Manque le contenu</li>") : (""));
            echo "
        </ul>
    ";
        }
        // line 34
        echo "    <div style=\"display: flex; justify-content: center; margin: 2rem 0\">
        <form action=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("literature_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["literature"] ?? null), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\" style=\"margin-right: 1rem\" method=\"POST\">
            <input type=\"hidden\" name=\"token\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add-edit-item"), "html", null, true);
        echo "\"/>
            <button class=\"btn btn-warning\">Modifier</button>
        </form>
        <form action=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("literature_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["literature"] ?? null), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Supprimer Citation/Poésie ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["literature"] ?? null), "title", [], "any", false, false, false, 39), "html", null, true);
        echo " ?')\" method=\"POST\">
            <input type=\"hidden\" name=\"token\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-item"), "html", null, true);
        echo "\"/>
            <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
        </form>
    </div>
    <h2 style=\"margin: 2rem 0\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["literature"] ?? null), "title", [], "any", false, false, false, 44), "html", null, true);
        echo "</h2>
    <h3 style=\"margin: 2rem 0\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["literature"] ?? null), "author", [], "any", false, false, false, 45), "html", null, true);
        echo "<h3>
    <div class=\"content-block\" style=\"font-size: 1.3rem; line-height: 2rem; margin-bottom: 1.5rem;\">";
        // line 46
        echo twig_get_attribute($this->env, $this->source, ($context["literature"] ?? null), "content", [], "any", false, false, false, 46);
        echo "</div>
    <div style=\"display: flex; justify-content: center; margin: 2rem 0\">
        <form action=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("literature_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["literature"] ?? null), "id", [], "any", false, false, false, 48)]), "html", null, true);
        echo "\" style=\"margin-right: 1rem\" method=\"POST\">
            <input type=\"hidden\" name=\"token\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add-edit-item"), "html", null, true);
        echo "\"/>
            <button class=\"btn btn-warning\">Modifier</button>
        </form>
        <form action=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("literature_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["literature"] ?? null), "id", [], "any", false, false, false, 52)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Supprimer Citation/Poésie ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["literature"] ?? null), "title", [], "any", false, false, false, 52), "html", null, true);
        echo " ?')\" method=\"POST\">
            <input type=\"hidden\" name=\"token\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-item"), "html", null, true);
        echo "\"/>
            <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
        </form>
    </div>
    <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("literature_browse");
        echo "\" class=\"btn btn-primary\">Retour à la liste des poésies</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "literature/read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 57,  167 => 53,  161 => 52,  155 => 49,  151 => 48,  146 => 46,  142 => 45,  138 => 44,  131 => 40,  125 => 39,  119 => 36,  115 => 35,  112 => 34,  106 => 31,  102 => 30,  98 => 29,  94 => 28,  90 => 26,  88 => 25,  84 => 24,  66 => 8,  62 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "literature/read.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Projets\\Relax&Co\\Back\\templates\\literature\\read.html.twig");
    }
}
