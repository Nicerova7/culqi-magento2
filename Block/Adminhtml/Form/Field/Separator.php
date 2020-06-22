<?php

namespace Culqi\Pago\Block\Adminhtml\Form\Field;

class Separator 
    extends \Magento\Backend\Block\AbstractBlock
    implements \Magento\Framework\Data\Form\Element\Renderer\RendererInterface
{
    
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $html = '<tr class="system-fieldset-sub-head">
                        <td colspan="5">     
                            <h4> 
                            <div class="section-config">
                                Pagos con efectivo 
                            </div>
                            </h4>   
                        </td>
                 </tr>'; 
        return $html;
    }
}