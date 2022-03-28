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

/* literature/index.html.twig */
class __TwigTemplate_07abeec131ac78ba51b30af2eaa7ffd46700eda46f70067b7d0689f1e88535ce extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "literature/index.html.twig", 1);
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
    .example-wrapper { margin: 1em auto; max-width: 100%; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1 style=\"margin-bottom: 2rem\">Liste des Poésies</h1>

    <form action=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("literature_add");
        echo "\" style=\"margin-bottom: 3rem\" method=\"POST\">
        <input type=\"hidden\" name=\"token\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add-edit-item"), "html", null, true);
        echo "\"/>
        <button class=\"btn btn-success\">Ajouter une poésie</button>
    </form>

    <div style=\"display: flex; justify-content: space-evenly; border-bottom: 1px solid black; margin: 1rem 0\">
        <p style=\"width: 5%\">#</p>
        <p style=\"width: 30%\">Titre</p>
        <p style=\"width: 25%; margin-left: 1rem\">Auteur/Autrice</p>
        <p style=\"width: 10%\">Affichage</p>
        <p style=\"width: 30%; margin-left: 4rem; text-align: center\">Actions</p>
    </div>
    <div>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["literatures"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lite"]) {
            // line 30
            echo "            <div style=\"display: flex; justify-content: space-evenly; border-bottom: 1px solid black; margin-bottom: 1rem; padding-bottom: 1rem\">
                <p style=\"width: 5%\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lite"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "</p>
                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("literature_read", ["id" => twig_get_attribute($this->env, $this->source, $context["lite"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" style=\"width: 30%\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lite"], "title", [], "any", false, false, false, 32), "html", null, true);
            echo "</a>
                <p style=\"width: 25%; margin-left: 1rem\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lite"], "author", [], "any", false, false, false, 33), "html", null, true);
            echo "</p>
                ";
            // line 34
            if ((twig_get_attribute($this->env, $this->source, $context["lite"], "displayOnWebsite", [], "any", false, false, false, 34) === true)) {
                // line 35
                echo "                    <p style=\"color: green; width: 10%\">Affiché</p>
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 36
$context["lite"], "displayOnWebsite", [], "any", false, false, false, 36) === false)) {
                // line 37
                echo "                    <p style=\"color: red; width: 10%\">Caché</p>
                ";
            }
            // line 39
            echo "                <div style=\"width: 30%; margin-left: 4rem; display:flex\">
                    <div style=\"position: relative; margin-right: 1rem\">
                        <form action=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("literature_display", ["id" => twig_get_attribute($this->env, $this->source, $context["lite"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" method=\"POST\">
                            <input type=\"hidden\" name=\"token\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("display-item"), "html", null, true);
            echo "\"/>
                            ";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, $context["lite"], "displayOnWebsite", [], "any", false, false, false, 43) === true)) {
                // line 44
                echo "                                <button class=\"btn btn-secondary\">Enlever du site</button>
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 45
$context["lite"], "displayOnWebsite", [], "any", false, false, false, 45) === false)) {
                // line 46
                echo "                                <button class=\"btn btn-primary\">Ajouter au site</button>
                            ";
            }
            // line 48
            echo "                        </form>
                        ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, $context["lite"], "displayable", [], "any", false, false, false, 49) === false)) {
                // line 50
                echo "                            <div style=\"height: 100%; width: 100%; overflow: hidden; position: absolute; top: 0;\">
                                <div style=\"position: absolute; height: 10px; width: 200%; background-color: red; top: 50%; left: -50%; transform: rotate(25deg); z-index: 5\"></div>
                                <div style=\"height: 100%; width: 100%; position: absolute; top: 0; left: 0; background-color: rgba(0, 0, 0, 0.6); border-radius: 5px;\"></div>
                            </div>
                        ";
            }
            // line 55
            echo "                    </div>
                    <form action=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("literature_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["lite"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\" style=\"margin-right: 1rem\" method=\"POST\">
                        <input type=\"hidden\" name=\"token\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add-edit-item"), "html", null, true);
            echo "\"/>
                        <button class=\"btn btn-warning\">Modifier</button>
                    </form>
                    <form action=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("literature_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["lite"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Supprimer Citation/Poésie ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lite"], "title", [], "any", false, false, false, 60), "html", null, true);
            echo " ?')\" method=\"POST\">
                        <input type=\"hidden\" name=\"token\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-item"), "html", null, true);
            echo "\"/>
                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                    </form>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "literature/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 67,  181 => 61,  175 => 60,  169 => 57,  165 => 56,  162 => 55,  155 => 50,  153 => 49,  150 => 48,  146 => 46,  144 => 45,  141 => 44,  139 => 43,  135 => 42,  131 => 41,  127 => 39,  123 => 37,  121 => 36,  118 => 35,  116 => 34,  112 => 33,  106 => 32,  102 => 31,  99 => 30,  95 => 29,  80 => 17,  76 => 16,  66 => 8,  62 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "literature/index.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Projets\\Relax&Co\\Back\\templates\\literature\\index.html.twig");
    }
}
