<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Blog\latesList.html.twig */
class __TwigTemplate_057204f070b2c27301c7edcbeeb470fc437536ccc56aa1240a5d6c51758af9c8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blog\\latesList.html.twig"));

        // line 1
        echo "<section id=\"offer\">
    <div class=\"container\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">新着ブログ記事</div>
            <div class=\"panel-body\">
                <ul>
                    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogList"] ?? $this->getContext($context, "blogList")));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 8
            echo "                        <li>
                            [";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "targetDate", []), "Y年m月d日"), "html", null, true);
            echo "]
                            ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "title", []), "html", null, true);
            echo "
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "                </ul>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Blog\\latesList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  52 => 10,  48 => 9,  45 => 8,  41 => 7,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"offer\">
    <div class=\"container\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">新着ブログ記事</div>
            <div class=\"panel-body\">
                <ul>
                    {% for blog in blogList %}
                        <li>
                            [{{ blog.targetDate|date('Y年m月d日') }}]
                            {{ blog.title }}
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>
</section>
", "Blog\\latesList.html.twig", "/Users/xearts/Desktop/Hagiwara Shion/tutorial_symphony2.7/app/Resources/views/Blog/latesList.html.twig");
    }
}
