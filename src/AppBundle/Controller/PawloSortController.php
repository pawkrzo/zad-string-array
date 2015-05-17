<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\PawloSortType;
use pawlo\Tools\PawloSort;
class PawloSortController extends Controller
{
    /**
     * @Route("/pawlo/pawlosort/show/form", name="pawlo_sort_show_form")
     */
    public function showFormAction()
    {
        $c = new PawloSort();
        $form = $this->createCreateForm($c);

        return $this->render(
            'AppBundle:PawloSort:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * @Route("/pawlo/pawlosort/calc", name="pawlo_sort_wynik")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
         $c = new PawloSort();
        $form = $this->createCreateForm($c);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:PawloSort:wynik.html.twig',
                array('wynik' => $c->sort())
            );

        }

        return $this->render(
            'AppBundle:PawloSort:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * Creates a form...
     *
     * @param PawloSort $c The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(PawloSort $c)
    {
        $form = $this->createForm(new PawloSortType(), $c, array(
            'action' => $this->generateUrl('pawlo_sort_wynik'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Sortuj'));

        return $form;
    }
}