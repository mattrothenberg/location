import LocationField from "./components/location-field";
import LocationFieldIndex from "./components/location-field-index";

Statamic.booting(() => {
  Statamic.$components.register("location-fieldtype", LocationField);
  Statamic.$components.register("location-fieldtype-index", LocationFieldIndex);
});
