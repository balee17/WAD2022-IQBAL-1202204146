import { CategoryType } from 'model/Products';

export type RoomsType = {
  id: number;
  name: string;
  room_type: CategoryType;
  room_icon: string;
  device_type: string;
  time_limit: string;
};
