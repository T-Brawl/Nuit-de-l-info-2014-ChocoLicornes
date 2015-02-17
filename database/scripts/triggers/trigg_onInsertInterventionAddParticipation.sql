/**
 * Trigger adding a participation for the organiser when adding an intervention
 */

CREATE OR REPLACE TRIGGER AFTER INSERT OR UPDATE ON intervention
FOR EACH ROW
BEGIN
    -- If inserting
    IF TG_OP == 'INSERT' THEN
        INSERT INTO participation
        VALUES (NEW.int_organiser, NEW.int_id);
    ELSE -- If updating
        IF NEW.int_organiser != OLD.int_organiser THEN
            -- Update the participation corresponding to the intervention
            UPDATE participation
            SET org_id = NEW.int_organiser
            WHERE org_id = OLD.int_organiser
              AND int_id = NEW.int_id;
        END IF;
    END IF;
END;