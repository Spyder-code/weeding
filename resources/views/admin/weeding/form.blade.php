<div class="row">
    <x-input :type="'text'" :name="'code'" :col="12" :label="'Code'" :required="true"/>
    <x-input :type="'text'" :name="'groom'" :col="12" :label="'Groom'" :required="true"/>
    <x-input :type="'text'" :name="'bride'" :col="12" :label="'Bride'" :required="true"/>
    <x-input :type="'datetime-local'" :name="'ceremony_date'" :col="12" :label="'Ceremony_date'" :required="true"/>
    <x-input :type="'textarea'" :name="'ceremony_address'" :col="12" :label="'Ceremony_address'" :required="true"/>
    <x-input :type="'text'" :name="'ceremony_maps'" :col="12" :label="'Ceremony_maps'" :required="true"/>
    <x-input :type="'datetime-local'" :name="'reception_date'" :col="12" :label="'Reception_date'" :required="true"/>
    <x-input :type="'textarea'" :name="'reception_address'" :col="12" :label="'Reception_address'" :required="true"/>
    <x-input :type="'text'" :name="'reception_maps'" :col="12" :label="'Reception_maps'" :required="true"/>
</div>
